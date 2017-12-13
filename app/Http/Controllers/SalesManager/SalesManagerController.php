<?php

namespace App\Http\Controllers\SalesManager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Gate;
use App\Http\Controllers\MenuController;
class SalesManagerController extends \App\Http\Controllers\Controller
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

    protected function menu(){
        return $data_nav['menu']=MenuController::index('salesmanager_categories');

    }
    public function index()
    {
    }


}

















