<?php

namespace App\Http\Controllers\Superadmin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use Auth;
class IndexController extends SuperadminController
{
    //
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        /*$this->user=Auth::user();*/

        if(Gate::denies('SUPERADMIN_EDIT')){

            abort(403);
        }
        $data_nav['menu']=$this->menu();
        $data=array();
        $this->title = 'Панель администратора';
        return view('superadmin/index',$data_nav);
    }
}





