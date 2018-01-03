<?php

namespace App\Http\Controllers\SiteAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use Auth;
use App\Category;
use App\Http\Site;

class MenuController extends SiteAdminController
{
    //
    public $category_menu;
    public $user_categories;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->user_categories=$this->CategoriesMenu();
    }

    public function index(){

        $data['menu']=$this->menu();
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";
        $data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data['site_categories']=$this->user_categories;
        return view('site_admin_page/themes/menu_areas/index',$data);
    }


}



