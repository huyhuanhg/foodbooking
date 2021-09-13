<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\ImageInterface;

class ImageRepository implements ImageInterface
{

    public function upload(object $image, string $path)
    {
        $realPath = str_replace('/tmp/', '', $image->getRealPath());
        $imageName = "$realPath-" . time() . '.' . $image->extension();
        $image->move(public_path($path), $imageName);
        return [
            'path' => "$path/$imageName",
            'file_name' => $imageName,
        ];
    }

    public function delete(string $path)
    {
        $path = public_path($path);
        if (file_exists($path)) {
            unlink($path);
        }
    }
}
