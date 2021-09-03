<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryInterface;

class CategoryRepository implements CategoryInterface
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }


    public function getCategories()
    {
        return $this->category->select("id", "store_cate_name", "category_description", "category_active")->get();
    }
}
