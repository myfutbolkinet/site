<?php

namespace App\Http\Controllers\SiteAdmin;

use Illuminate\Http\Request;
use Gate;
use Auth;
use App\Category;
use App\Site_categories;

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
        $data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        //dd($this->user_categories['categories_array']);
        if($this->user_categories['categories_array'] && $this->user_categories['categories_array'][0]->categories!==''){
            $data['site_categories']=unserialize($this->user_categories['categories_array'][0]->categories);

        foreach($data['categories'] as $category){
            if(in_array($category->id,$data['site_categories'])){
                $category->checked='checked';
            }
            else{
                $category->checked='';
            }

        }
            $data['json']=json_encode($data['site_categories']);
    }
        //dd($data['site_categories']);

        return view('site_admin_page/themes/menu_areas/index',$data);
    }


    public function save_cats_list(Request $request){
        $cats_array=serialize($request->input('cats_array'));
        $user=$this->user;
        $is_cat=$this->user_categories['categories'];
        //$categories=unserialize($is_cat[0]->categories);
        if(count($is_cat)>0){
            $is_cat = Site_categories::find($this->user_categories['row']);

            $is_cat->categories = $cats_array;
        }
        else{

            $is_cat = new Site_categories();

            $is_cat->user_id = $user;
            $is_cat->categories = $cats_array;
        }
        var_dump($is_cat);die;
        $is_cat->save();
        return json_encode('Changes saved');
    }

}



