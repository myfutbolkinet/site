<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\FunctionsController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use DB;
use App\Category;
use App\Property;
class GoodsPropertiesController extends SuperadminController
{
    //

    public function __construct()
    {
        /*     if(Gate::denies('SUPERADMIN_EDIT')){

                 abort(403);
             }*/

    }


    public function index(){

        $data=array();
        $this->title = 'Панель администратора';
        $data['menu']=$this->menu();
        $data['properties']=DB::table('properties')->get();
        foreach($data['properties'] as $val){
            $cats=explode(',',$val->categories);
            $val->categories=$cats;
        }
        /**/
        return view('superadmin/goods_properties',$data);
    }


    public function good_property($id){

        $data=array();
        $data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data['menu']=$this->menu();
        $data['property']=DB::table('properties')->where('id',$id)->get();
        $data['props'] = explode(',', $data['property'][0]->data);

        $this->title = 'Панель администратора';

        return view('superadmin/good_property',$data);
    }


    public function add_property(){

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

    $categories=explode(',',$request->input('categories'));
    $data=[
        'name'=>$request->input('name'),
        'column'=>$request->input('column'),
        'active'=>($request->input('active')!==null) ? 0:1,
        'main_property'=>($request->input('main_property')!==null) ? 0:1,
        'hint'=>($request->input('hint')!==null) ? 0:1,
        'show_on_goods_page'=>($request->input('show_on_goods_page')!==null) ? 0:1,
        'show_on_comparison'=>($request->input('show_on_comparison')!==null) ? 0:1,
        'show_on_filter'=>($request->input('show_on_filter')!==null) ? 0:1,
        'multiple'=>($request->input('multiple')!==null) ? 0:1,
        'categories'=>serialize($categories),
        'data'=>(!NULL==$request->input('data')) ? serialize($request->input('data') ): ''
        ];
        DB::table('properties')->insert($data);
        $data_m =  Property::all();
        $last_data_object = collect($data_m)->last();

        $last_data_object =$last_data_object->id;

        $categories=explode(',',$request->input('categories'));
        foreach($categories as $val){
        $data_prop[]=[
            'category_id'=>$val,
            'property_id'=>$last_data_object
        ];
        }
        DB::table('property_category')->insert($data_prop);
        foreach($request->input('data') as $val){
            $data_prop_d[]=[

                'property_id'=>$last_data_object,
                'data'=>$val
            ];
        }
        DB::table('property_datas')->insert($data_prop_d);
    }


    public function edit_good_property_form(Request $request){

    $data=[
            'name'=>$request->input('name'),
            'column'=>$request->input('column'),
            'active'=>($request->input('active')!=1) ? 0:1,
            'main_property'=>($request->input('main_property')!=1) ? 0:1,
            'hint'=>($request->input('hint')!==1) ? 0:1,
            'show_on_goods_page'=>($request->input('show_on_goods_page')!=1) ? 0:1,
            'show_on_comparison'=>($request->input('show_on_comparison')!=1) ? 0:1,
            'show_on_filter'=>($request->input('show_on_filter')!=1) ? 0:1,
            'multiple'=>($request->input('multiple')!=1) ? 0:1,
            'categories'=>$request->input('categories'),
            'data'=>implode(",", $request->input('data'))
        ];

        DB::table('properties')->where('id',$request->input('id'))->update($data);
//удалить записи в таблице property_category соответствующие этой категории
        DB::table('property_category')->where('property_id',$request->input('id'))->delete();
        $categories=explode(',',$request->input('categories'));
        foreach($categories as $val){
            $data_prop[]=[
                'category_id'=>$val,
                'property_id'=>$request->input('id')
            ];
        }
        DB::table('property_category')->insert($data_prop);

    }
}
