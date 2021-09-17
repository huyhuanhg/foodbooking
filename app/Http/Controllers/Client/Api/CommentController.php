<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiCommentRequest;
use App\Http\Requests\Api\ApiDeleteImageRequest;
use App\Http\Requests\Api\ApiDeleteImagesRequest;
use App\Http\Requests\Api\ApiUploadImagesRequest;
use App\Repositories\Interfaces\ImageInterface;
use App\Services\CommentService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{

    protected $commentService, $imageInterface;

    public function __construct(CommentService $commentService, ImageInterface $imageInterface)
    {
        $this->commentService = $commentService;
        $this->imageInterface = $imageInterface;
    }

    public function index(Request $request)
    {
        $response = $this->commentService->getList($request);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function store(ApiCommentRequest $request)
    {
        $response = $this->commentService->create($request);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function uploadPicture(ApiUploadImagesRequest $request)
    {
        $response = $this->commentService->uploadPictures($request->images);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function deletePicture(ApiDeleteImageRequest $request)
    {
        $this->imageInterface->delete($request->path);
        return response()->json([]);
    }

    public function deletePictures(ApiDeleteImagesRequest $request)
    {
        $this->commentService->deletePictures($request->paths);
        return response()->json([]);
    }
}
