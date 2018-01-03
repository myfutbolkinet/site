<?php

namespace App\Http\Controllers\SiteAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Gate;
use App\Category;
use App\Http\Controllers\MenuController;


class SiteAdminController extends \App\Http\SiteEntity
{
    //TODO Определить основные свойства SiteAdmin

    
    public function __construct(Request $request)
    {
    $this->middleware('auth:admin');
    $this->host=$request->getHttpHost();
    }

    protected function menu(){
    return $data_nav['menu']=MenuController::index('admin_categories');

    }
    public function index()
    {
        $this->title = 'Панель администратора';
        $data['menu']=$this->menu();
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";




    return view('site_admin_page.admin',$data);

    }

    public function CategoriesMenu()
    {
        // TODO: Implement CategoriesMenu() method.
        return $this->get_categories();
    }





}

















