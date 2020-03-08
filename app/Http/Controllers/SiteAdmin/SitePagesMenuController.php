<?php

namespace App\Http\Controllers\SiteAdmin;

use Illuminate\Http\Request;
use Gate;
use Auth;
use App\Category;
use App\Site_categories;
use App\Http\Classes\CategoriesFactory;
class SitePagesMenuController extends SiteAdminController
{
    //
    public $category_menu;
    public $user_categories;
    public $user;

    public function __construct()
    {
       parent::__construct();
      //dd($this->user_categories);


    }

    public function index(){
        $this->user=Auth::guard('admin')->user();
        //dump($this->user);
        $data['sites']=$this->user->merchant->sites;

        $data['menu']=$this->menu();
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";
        //dd($data);
        return view('site_admin_page/themes/site_pages_menu/index',$data);
    }

    public function postData(Request $request){
        $data['menu']=$this->menu();
        $data['data']=\App\MerchantSiteMenuPosition::where('site_id',$request->site_id)->first();
        $data['data']=$data['data']->data;
//var_dump($data['data']);
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";
        //dd($data);
        return view('site_admin_page/themes/site_pages_menu/view',$data);
    }


    public function updatePagesOrder(Request $request){

       // var_dump($request->site_id);
        if(!empty(json_decode($request->string_data))){
            var_dump($request->string_data);
            $update=[
                'data'=>$request->string_data
            ];
            if(\App\MerchantSiteMenuPosition::where('site_id',$request->site_id)->update($update)){
                return json_encode(['message'=>'success']);
            }
            else{
                return json_encode(['message'=>'error']);
            }
        }
        else{
            return json_encode(['message'=>'not updated']);
        }



    }



}



