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

    public function good_property_form(Request $request){

     dd($request->input());
    $data=[
        'name'=>$request->input('name'),
        'column'=>$request->input('column'),
        'active'=>(!empty($request->input('active'))) ? 1:0,
        'main_property'=>(!empty($request->input('main_property'))) ? 1:0,
        'hint'=>(!empty($request->input('hint'))) ? 1:0,
        'show_on_goods_page'=>(!empty($request->input('show_on_goods_page'))) ? 1:0,
        'show_on_comparison'=>(!empty($request->input('show_on_comparison'))) ? 1:0,
        'show_on_filter'=>(!empty($request->input('show_on_filter'))) ? 1:0,
        ' multiple'=>(!empty($request->input(' multiple'))) ? 1:0,

        ];

    }
}
