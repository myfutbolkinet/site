<?php

namespace App\Http\Ajax;

use App\Category;
use Illuminate\Http\Request;
use Auth;
use App\Site_categories;
class FuncCategoriesClass
{

   public function save_cats_list(Request $request){
       if($request->input('cats_array')==NULL){
       $cats_array='';
       }else{
       $cats_array=serialize($request->input('cats_array'));
        }
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
       return json_encode('Changes saved');

   }

    public function show_cats_list(Request $request){
        $cats_array=$request->input('cats_array');
        $cats_array=explode(',',$cats_array);
      //Из выбранных категорий оставить только те у которых нет потомка
        foreach($cats_array as $key=>$value){
             $is_cat=Category::where('parent_id',intval($value))->first();

            if($is_cat==NULL){
                $final_categories[]=$value;
            }
        }

        dump($final_categories);
        $data=[];
        $data['goods']=\App\Good::whereIn('category',$final_categories)->get();
dump($data['goods']);


        $data['sub_menu']=[
            1=>[
                'btn_title'=>'управление товарами и группами',
                'href'=>'/admin/goods_and_groups'
            ],
            2 =>[
                'btn_title'=>'Добавить позицию',
                'href'=>'/admin/add_good'
            ],


        ];
        $data['active_menu_item']=1;
        $data['sub_menu2']=[
            1=>[
                'btn_title'=>'Показывать все товары',
                'href'=>'/admin/goods_and_groups'
            ],
            2 =>[
                'btn_title'=>'Задать фильтр выборки товаров по категориям',
                'href'=>'/admin/good_filter'
            ],
            3 =>[
                'btn_title'=>'Товары по категориям',
                'href'=>'tab-3'
            ],


        ];
        $data['active_menu2_item']=3;

        return view('site_admin_page.show_goods.show_goods_by_filter',$data);

    }
}
