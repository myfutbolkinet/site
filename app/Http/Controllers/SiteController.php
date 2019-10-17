<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\Display_lib;
use App\Site;
use Auth;
use \App\Http\Traits\ShowCartTrait;
class SiteController extends Controller
{
    use ShowCartTrait;
    public $host;

    public function __construct(Request $request)
    {
    /*    $this->middleware('auth:admin');*/
    $this->host=$request->getHttpHost();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['images']=\App\Good::where('main_screen',1)->with('photos')->take(8)->get();
        $data_content=($this->ShowCart()['products']) ? $this->ShowCart() : [];
        $data_content['cart'] = session()->get('cart');
        $data_content['title']="Industry";
        $path='main_site/index';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        //dd($data_content);
        return view($path,$data,$data_content);
    }

    public function showProduct($id)
    {
        $data['product']=\App\Good::where('id',$id)->with('photos')->first();

        $models_exemplars=\App\Good::where('model_id',$data['product']->model_id)->with('colors')->get();
        foreach($models_exemplars as $good){
            $data_content['colors'][]=$good->colors->first();
        }
        $data_content['title']="Industry";
        $path='main_site/product';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return view($path,$data,$data_content);
    }

    public function getHorisontal()
    {
        //Получить айди клиента
        $user = Auth::user();
        //Получить из Монго HorisontalMenu клиента
        $collection = Site::where('user_id',$user->id)->get();
        echo json_encode($collection[0]->horisontal_menu);

    }
    public function putHorisontal(Request $request)
    {
        //Получить айди клиента
        $user = Auth::user();
        //Получить из Монго HorisontalMenu клиента
        $array=json_decode($request->input('str'));

        Site::where('user_id',$user->id)
            ->update(['horisontal_menu'=> $array]);

        echo json_encode('Menu edited');

    }

    public function showAllProducts(){
        $data_content=($this->ShowCart()['products']) ? $this->ShowCart() : [];
        $data_content['goods']=\App\Good::with('photos')->simplePaginate(20);
        //dump($data_content['goods']);
        $path='main_site/products';
        return view($path,$data_content);
    }

    public function showCategory(Request $request){
        $id=$request->input('cat');
        $price_filter=$request->input('price_filter');
        $data_content=($this->ShowCart()['products']) ? $this->ShowCart() : [];
        if($price_filter && $price_filter==1 ){
            $data_content['goods']=\App\Good::where('category',$id)->with('photos')->orderBy('price', 'ASC')->simplePaginate(20);
        }
        elseif($price_filter && $price_filter==2){
            $data_content['goods']=\App\Good::where('category',$id)->with('photos')->orderBy('price', 'DESC')->simplePaginate(20);
        }
        else{
            $data_content['goods']=\App\Good::where('category',$id)->with('photos')->simplePaginate(20);
        }
        //dump($data_content['goods']);
        $path='main_site/products';
        return view($path,$data_content);
    }


}
