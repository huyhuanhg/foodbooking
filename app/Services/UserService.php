<?php

namespace App\Services;

use App\Repositories\Interfaces\ImageInterface;
use App\Repositories\Interfaces\UserAuthInterface;
use App\Repositories\Interfaces\UserInterface;
use Symfony\Component\HttpFoundation\Response;

class UserService
{
    protected $userInterface, $imageInterface, $userAuthInterface;

    public function __construct(
        UserInterface $userInterface,
        ImageInterface $imageInterface,
        UserAuthInterface $userAuthInterface
    )
    {
        $this->userInterface = $userInterface;
        $this->imageInterface = $imageInterface;
        $this->userAuthInterface = $userAuthInterface;
    }

    public function changeAvatar($image)
    {
        $imageInfo = $this->imageInterface->upload($image, '/images/uploads/user-avatar');
        $currentPath = $this->userInterface->changeAvatar($imageInfo['path']);
        $this->imageInterface->delete($currentPath);
        return $imageInfo['path'];
    }

    public function validateUpdateRequest($updateData)
    {
        return $updateData;
    }

    public function updateUserInfo($updateData)
    {
        if (!empty($updateData['email'])){
            $currentEmail = auth()->user()->email;
            if ($currentEmail !== $updateData['email']){
                $isExist = !!$this->userAuthInterface->checkEmailExist($updateData['email']);
                if ($isExist){
                    return ['message' => 'Email đã tồn tại!', 'status' => Response::HTTP_FORBIDDEN];
                }
            } else {
                unset($updateData['email']);
            }
        }
        return $this->userInterface->updateUserInfo($updateData);
    }
}
