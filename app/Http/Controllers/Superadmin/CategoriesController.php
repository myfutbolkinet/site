<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use App\Category;
class CategoriesController extends SuperadminController
{

    public function add_show(){
        $data=array();
        $data['menu']=$this->menu();
        $data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        $this->title = 'Панель администратора';
        return view('superadmin/add_category',$data);
    }
}
