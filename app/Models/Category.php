<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';

    public function getAllCategoriesActive()
    {
        return Category::where('category_active', 1)
            ->get();
    }

    public function getAllCategories()
    {
        return Category::get()->fresh();
    }
}
