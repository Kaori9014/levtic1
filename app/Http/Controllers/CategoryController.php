<?php

namespace App\Http\Controllers;
use App\Model\Category;


class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
        
    }
}