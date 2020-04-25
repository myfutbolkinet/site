<?php

namespace App\Http\Controllers\SiteAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use App\Category;
use App\Type_of_good;
use App\User;
use App\Http\Controllers\MenuController;
use App\Role;
use App\Order;
class OrdersController extends \App\Http\SiteEntity
{
    public function __construct()
    {
        parent::__construct();


        $this->template='site_admin_page';
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function menu(){
        return $data_nav['menu']=MenuController::index('admin_categories');

    }

    public function index(){
        $data['menu']=$this->menu();
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";
      return view('site_admin_page.orders.index',$data);
    }

    public function postData(){

        $data['orders']=Order::orderBy('created_at', 'desc')->get();
        $data['title']="Додати товар";
        return view('site_admin_page.orders.table',$data);
    }

}
