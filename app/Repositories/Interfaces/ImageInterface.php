<?php

namespace App\Repositories\Interfaces;

interface ImageInterface
{
    public function upload(object $image, string $path);

    public function delete(string $path);
}
