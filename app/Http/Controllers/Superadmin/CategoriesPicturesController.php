<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use App\Http\Classes\CategoriesFactory;
use App\Category;
class CategoriesPicturesController extends SuperadminController
{


    public function __construct()
    {
        parent::__construct();

    }

    public function index(){
        $f=new CategoriesFactory();
        $f=$f->get_categories('All');
        $data=$f->show_categories();
        session()->forget('category_image');
        $this->title = 'Панель администратора';
        return view('superadmin/add_pictures',$data);
    }
}
