<?php

namespace App\Http\Controllers\SiteAdmin;

use App\Http\Categories;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MenuController;
use App\Site_categories;
use Auth;
class SiteAdminController extends  \App\Http\SiteEntity
{
    //TODO Определить основные свойства SiteAdmin

    protected $host;
    public $user;
    public $user_categories;
    public function __construct()
    {
    parent::__construct();
    $this->middleware('auth:admin');
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


    }

    public function renderOutput($data){
        /*$this->vars = arry_add($this->vars,'title',$this->title);*/
        //подключить меню
        $data_nav['menu']=$this->menu();
        //передача в вид через Display_Lib

        $data['title']="Фрилансим по крупному";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return \App\Http\Libraries\Display_lib::admin($this->template,$data,$data_nav);
    }






}

















