<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
class GoodsPropertiesController extends SuperadminController
{
    //

    public function __construct()
    {

    }


    public function index(){
        if(Gate::denies('SUPERADMIN_EDIT')){

            abort(403);
        }

        $data=array();
        $this->title = 'Панель администратора';
        $data_nav['menu']=$this->menu();
        return view('superadmin/goods_properties',$data_nav);
    }

    public function add_property(){
        if(Gate::denies('SUPERADMIN_EDIT')){

            abort(403);
        }

        $data_nav['menu']=$this->menu();
        $data=array();
        $this->title = 'Панель администратора';
        return view('superadmin/add_good_property',$data_nav);
    }
}
