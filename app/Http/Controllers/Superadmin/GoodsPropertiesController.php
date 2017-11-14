<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use App\Category;
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
        $data=array();
        $data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data['menu']=$this->menu();

        $this->title = 'Панель администратора';
        return view('superadmin/add_good_property',$data);
    }
}
