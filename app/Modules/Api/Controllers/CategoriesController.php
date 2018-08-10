<?php

namespace App\Modules\Api\Controllers;

use App\Http\Classes\Categories;
use App\Category;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function __construct()
    {

    }

    public function GetCategories($id)
    {
        return Category::where('parent_id',$id)
        ->get();
    }



}