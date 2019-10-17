<?php

namespace App\Http\Controllers\SiteAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use App\Category;
use App\Type_of_good;
use App\Http\Controllers\MenuController;
class CategoriesController extends \App\Http\SiteEntity
{
    //


    protected function menu(){
        return $data_nav['menu']=MenuController::index('admin_categories');

    }

    public function index(){
        /*$this->user=Auth::user();*/

      /*  if(Gate::denies('VIEW_ADMIN')){

            abort(403);
        }*/

        $this->title = 'Панель администратора';
        $data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data['types']=Type_of_good::get();

        $this->template='site_admin_page/categories';
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";

        return view('superadmin/add_category',$data);
       //return $this->renderOutput($data);
    }

    public function add_category(){
        /*$this->user=Auth::user();*/

        if(Gate::denies('VIEW_ADMIN')){

            abort(403);
        }

        $this->title = 'Панель администратора';
        $data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data['types']=Type_of_good::get();

        $this->template='site_admin_page/add_category';
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";

        return $this->renderOutput($data);
    }


    public function add_show(){
        $data=array();
        $data['menu']=$this->menu();
        $data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        $this->title = 'Панель администратора';
        return view('superadmin/add_category',$data);
    }

}
