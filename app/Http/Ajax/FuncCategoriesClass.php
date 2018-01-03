<?php

namespace App\Http\Ajax;

use Illuminate\Http\Request;
use Auth;
use App\Site_categories;
class FuncCategoriesClass
{


   public function save_cats_list(Request $request){
       $cats_array=serialize($request->input('cats_array'));
       $user=Auth::guard('admin')->user()->id;

       $is_cat=Site_categories::where('user_id', $user)
        ->get();
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
