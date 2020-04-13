<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Logo;
use App\Category;
use App\Http\Libraries\Display_lib;
use App\Http\Controllers\CursController;
class CategoryController extends Controller
{
    public function index(Request $request)
    {

        $data_nav['curs']=CursController::index();
        $data_content['curs']=CursController::index();

        //menu
        $data_content['menu']=$data_nav['menu']=MenuController::index('categories');

        //goods

        if(request()->has('price-range-low') && request()->has('price-range-high') ){
        $data_content['goods'] = Good::where('category', $request->route()->id)->where('price','>',(int)request('price-range-low')/$data_content['curs'])->where('price','<',(int)request('price-range-high')/$data_content['curs'])
        ->paginate(2);


        }
        else{
        $data_content['goods']=Good::where([
            ['category', '=', $request->route()->id]
        ])->paginate(2);
        }

        $data_content['category_id']=$request->route()->id;
        $data_content['category_name']=Category::where('id',$request->route()->id )->get();
        $data_content['category_name']= $data_content['category_name'][0]['original']['name'];
        //page
        $path='category_page';
        $data_content['title']="Industry";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::index($path,$data,$data_nav,$data_content);
    }

    public function list_action(Request $request)
    {
        $data_nav['curs']=CursController::index();
        $data_content['curs']=CursController::index();

        //menu
        $data_content['menu']=$data_nav['menu']=MenuController::index('categories');

        //goods

        if(request()->has('price-range-low') && request()->has('price-range-high') ){
            $data_content['goods'] = Good::where('category', $request->route()->id)->where('price','>',(int)request('price-range-low')/$data_content['curs'])->where('price','<',(int)request('price-range-high')/$data_content['curs'])
                ->paginate(2);


        }
        else{
            $data_content['goods']=Good::where([
                ['category', '=', $request->route()->id]
            ])->paginate(2);
        }

        $data_content['category_id']=$request->route()->id;
        $data_content['category_name']=Category::where('id',$request->route()->id )->get();
        $data_content['category_name']= $data_content['category_name'][0]['original']['name'];
        //page
        $path='category_list_page';
        $data_content['title']="Industry";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::index($path,$data,$data_nav,$data_content);
    }

    public function price_range(){
        $data_nav['curs']=CursController::index();
        $data_content['curs']=CursController::index();
        $data_content['menu']=$data_nav['menu']=MenuController::index('categories');

        //найти в таблице goods все записи по выбранной категории где цена больше= lowprice и меньше= highprice
   $data_content['goods'] = Good::where('category', $_POST['id_cat'])->where('price','>',(int)$_POST['price-range-low']/$data_content['curs'])->where('price','<',(int)$_POST['price-range-high']/$data_content['curs'])->paginate(2);
        $data_content['category_id']=$_POST['id_cat'];

        //page
        $path='category_page';
        $data_content['title']="Industry";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::index($path,$data,$data_nav,$data_content);
    }
}
