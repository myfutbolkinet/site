<?php

namespace App\Http\Controllers\SalesManager;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use Auth;
class IndexController extends SalesManagerController
{
    //
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        /*$this->user=Auth::user();*/

        if(Gate::denies('SUPERADMIN_SALES')){


                abort(403);

        }

        $data_nav['menu']=$this->menu();
        $data=array();
        $this->title = 'Панель администратора';

        return redirect('/salesmanager/clients');/*view('salesmanager/index',$data_nav)*/
    }
}





