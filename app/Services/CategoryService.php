<?php

namespace App\Services;

use App\Repositories\Interfaces\CategoryInterface;

class CategoryService
{
    protected $categoryInterface;

    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;
    }

    public function getList()
    {
        return $this->categoryInterface->getCategories();
    }
}
