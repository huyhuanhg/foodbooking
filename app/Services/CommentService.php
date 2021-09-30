<?php

namespace App\Services;


use App\Repositories\Interfaces\CommentInterface;
use App\Repositories\Interfaces\ImageInterface;

class CommentService
{
    protected $comment, $image;

    public function __construct(CommentInterface $comment, ImageInterface $image)
    {
        $this->comment = $comment;
        $this->image = $image;
    }

    public function getList($request)
    {
        $comments = $this->comment->getComments(
            $request->store ?? -1,
            $request->user_id ?? -1,
            $request->limit ?? 15,
            $request->page ?? 1
        );
        $ids = [];
        foreach ($comments as $comment) {
            array_push($ids, $comment->id);
        }
        $pictures = $this->comment->getPictures($ids);
        $this->syncPicture($comments, $pictures);
        return $comments;
    }

    public function create($request)
    {
        return $this->comment->create(
            $request->store_id,
            $request->content,
            $request->paths ?? []
        );
    }

    public function uploadPictures($images)
    {
        $imageList = [];
        foreach ($images as $image) {
            array_push($imageList, $this->image->upload($image, '/images/uploads/comment-pictures'));
        }
        return $imageList;
    }

    public function deletePictures($paths)
    {
        foreach ($paths as $path) {
            if (!is_string($path)) continue;
            $this->image->delete($path);
        }
    }

    public function uploadPictureSingle($image)
    {
        return $this->image->upload($image, '/images/uploads/comment-pictures');
    }

    protected function syncPicture($comments, $pictureList)
    {
        if (empty($pictureList)) {
            return;
        }
        foreach ($comments as $comment) {
            $pictures = $pictureList->filter(function ($imageItem) use ($comment) {
                return $comment->id == $imageItem->comment_id;
            });
            $newPictures = [];
            foreach ($pictures as $imageItem) {
                array_push($newPictures, $imageItem->picture_path);
            }
            $comment->setAttribute('pictures', $newPictures);
        }
    }
}
