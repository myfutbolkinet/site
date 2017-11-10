<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use Auth;
class IndexController extends AdminController
{
    //
    public function __construct()
    {
       parent::__construct();


        $this->template='admin_page';
    }

    public function index(){
    /*$this->user=Auth::user();*/

    if(Gate::denies('VIEW_ADMIN')){

        abort(403);
    }
    $data=array();
    $this->title = 'Панель администратора';
    return $this->renderOutput($data);
}
    public function main(){
        /*$this->user=Auth::user();*/

        if(Gate::denies('VIEW_ADMIN')){

            abort(403);
        }
        $data_nav['menu']=$this->menu();
        $data=array();
        $this->title = 'Панель администратора';
        return view('home/index',$data_nav);
    }
}













