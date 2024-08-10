<?php

namespace App\Controllers;

use App\Models\CategoriesModel;

class Categories extends BaseController
{
   
    static function index(): string
    {
        $categoriesModel = new CategoriesModel();
        $categories = $categoriesModel->findAll();
        $data = [
            'title' => 'Home|index',
            'categories' => $categories
        ];
        return view('/categories/category.php', $data);
    }
}
