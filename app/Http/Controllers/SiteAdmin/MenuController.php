<?php

namespace App\Http\Controllers\SiteAdmin;

use Illuminate\Http\Request;
use Gate;
use Auth;
use App\Category;


class MenuController extends SiteAdminController
{
    //
    public $category_menu;
    public $user_categories;
    public $user;

    public function __construct(Auth $auth)
    {
        //parent::__construct();
        $this->user_categories=$this->CategoriesMenu();
       $this->user=$auth::guard('admin')->user()->id;
       dd($this->user);
        //dd($this->user_categories);
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

        dd($this->user);
        $data['site_categories']=$this->user_categories;
        dd($data['site_categories']);
        return view('site_admin_page/themes/menu_areas/index',$data);
    }


    public function save_cats_list(Request $request){
        $cats_array=serialize($request->input('cats_array'));
        /*$user=Auth::guard('admin')->user()->id;

        $is_cat=Site_categories::where('user_id', $user)
            ->get();*/
        $is_cat=$this->user_categories;
        var_dump($is_cat);
        if(count($is_cat)>0){
            $is_cat = Site_categories::find($is_cat[0]->id);

            $is_cat->categories = $cats_array;
        }
        else{
            $is_cat = new Site_categories();

            $is_cat->user_id = $user;
            $is_cat->categories = $cats_array;
        }
        $is_cat->save();

    }

}



