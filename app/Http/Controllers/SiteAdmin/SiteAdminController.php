<?php

namespace App\Http\Controllers\SiteAdmin;

use App\Http\Categories;
use Illuminate\Http\Request;
use Gate;
use App\Category;
use App\Http\Controllers\MenuController;
use App\Site_categories;
use Auth;
class SiteAdminController extends \App\Http\SiteEntity implements Categories
{
    //TODO Определить основные свойства SiteAdmin

    protected $host;
    public $user;
    public function __construct()
    {
    parent::__construct();
    $this->middleware('auth:admin');


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
        //dd ($this->get_categories());
    }

    public function get_categories(){

        return Site_categories::where('user_id', $this->user)
            ->get();
    }






}

















