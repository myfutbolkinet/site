<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Controllers\MenuController;
class AdminController extends \App\Http\Controllers\Controller
{
    //
    protected $g_rep;
    protected $user;
    protected $template;
    protected $content =False;
    protected $title;
    protected $vars;
    
    public function __construct()
    {
      /*$this->middleware('auth');*/
       


    }

    private function menu(){
        return $data_nav['menu']=MenuController::index('admin_categories');

    }
    public function index()
    {


        
        
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

















