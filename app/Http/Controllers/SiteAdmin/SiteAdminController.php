<?php

namespace App\Http\Controllers\SiteAdmin;

use App\Http\Categories;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MenuController;
use App\Site_categories;
use Auth;
class SiteAdminController extends  \App\Http\SiteEntity implements Categories
{
    //TODO Определить основные свойства SiteAdmin

    protected $host;
    public $user;
    public $user_categories;
    public function __construct()
    {
    //parent::__construct($controller);
    //$this->middleware('auth:admin');
        $this->middleware('auth:admin');
        $this->middleware(function ($request, $next) {
            $this->user=Auth::guard('admin')->user()->id;
            $this->user_categories['categories_array']=$this->get_categories()['categories_array'];//сериализованный массив категорий по юзеру
            $this->user_categories['row']=$this->get_categories()['row'];
            $this->user_categories['categories']=$this->CategoriesMenu();//Категории только принадлежащие юзеру
            return $next($request);
        });
    }

    protected function menu(){
    return $data_nav['menu']=MenuController::index('admin_categories');

    }
    public function index()
    {   $this->title = 'Панель администратора';
        $data['menu']=$this->menu();
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";




    return view('site_admin_page.admin',$data);

    }



    public function get_categories(){
       $res= Site_categories::where('user_id', $this->user)
            ->get();
        if(count($res)>0){
            $result['row']=$res[0]->id;
            $result['categories_array']=$res;
            return $result;
        }else{
            return null;
        }

    }






}

















