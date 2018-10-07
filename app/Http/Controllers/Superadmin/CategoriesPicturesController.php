<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use App\Category;
class CategoriesPicturesController extends SuperadminController
{
    //

    public function index(){

        $this->title = 'Панель администратора';
        return view('superadmin/add_pictures');
    }
}
