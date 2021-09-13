<?php

namespace App\Services;

use App\Repositories\Interfaces\ImageInterface;
use App\Repositories\Interfaces\UserInterface;

class UserService
{
    protected $userInterface, $imageInterface;

    public function __construct(UserInterface $userInterface, ImageInterface $imageInterface)
    {
        $this->userInterface = $userInterface;
        $this->imageInterface = $imageInterface;
    }

    public function changeAvatar($image)
    {
        $imageInfo = $this->imageInterface->upload($image, '/images/uploads/user-avatar');
        $currentPath = $this->userInterface->changeAvatar($imageInfo['path']);
        $this->imageInterface->delete($currentPath);
        return $imageInfo['path'];
    }
}
