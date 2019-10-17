<?php

namespace App\Http\Traits;
use App\Http\Controllers\MenuController;

trait ShowCartTrait
{

    public function showCart ()
    {
        if(!\Session::has('cart')){

            $path='main_site';

            return view('shop.shoping_cart',['products'=> null]);



        }
        $data_nav['menu']=MenuController::index('categories');
        $oldCart = session()->get('cart');
        $cart=new \App\Cart($oldCart);
        $path='shoping_cart';
        $data_content['products']=$cart->items;
        dump($data_content);
        $data_content['totalPrice']=$cart->totalPrice;

        return $data_content;
    }



}
