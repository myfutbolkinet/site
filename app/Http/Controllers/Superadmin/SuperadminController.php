<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Gate;
use App\Http\Controllers\MenuController;
class SuperadminController extends \App\Http\Controllers\Controller
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
        $this->middleware('auth:superadmin');
        //dd('SuperadminController@constructor');


    }

    protected function menu(){
        return $data_nav['menu']=MenuController::index('superadmin_categories');

    }
    public function index()
    {

     return view('superadmin.index');


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

















