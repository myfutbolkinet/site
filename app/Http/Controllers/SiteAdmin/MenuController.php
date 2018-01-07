<?php

namespace App\Http\Controllers\SiteAdmin;

use Illuminate\Http\Request;
use Gate;
use Auth;
use App\Category;
use App\Site_categories;
use App\Http\Classes\CategoriesFactory;
class MenuController extends SiteAdminController
{
    //
    public $category_menu;
    public $user_categories;
    public $user;

    public function __construct()
    {
       parent::__construct();
        //dd($this->user_categories);
    }

    public function index(){

        $data['menu']=$this->menu();
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";
        $f=new CategoriesFactory();
        $f=$f->get_categories('All');
        $data=$f->show_categories();
        //dd($data);
        return view('site_admin_page/themes/menu_areas/index',$data);
    }




}



