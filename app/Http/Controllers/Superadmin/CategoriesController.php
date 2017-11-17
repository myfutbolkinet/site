<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
class CategoriesController extends SuperadminController
{
    //

    public function add_show(){

        if(Gate::denies('SUPERADMIN_EDIT')){

            abort(403);
        }
        $data_nav['menu']=$this->menu();
        $data=array();
        $this->title = 'Панель администратора';
        return view('superadmin/add_category',$data_nav);
    }
}
