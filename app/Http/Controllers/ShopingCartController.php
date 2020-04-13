<?php

namespace App\Http\Controllers;

use App\MailService;
use Illuminate\Http\Request;
use App\Good;
use App\Http\Libraries\Display_lib;
use App\Mail\OrderShipped;
use App\Mail\OrderShipped_to_admin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Cart;
use Auth;
use App\Http\Controllers\CursController;
class ShopingCartController extends Controller
{
    protected $id;
    protected $qnt;
    protected $product;

    //
    public function addToCart(Request $request){
            $good = Good::with('photos')->find($request->input('id'));
            $this->product = $good;
            $this->product['qnt'] = ($request->input('id')) ? (int)$request->input('id') : 1;

            if (Session::has('cart')) {
                $oldCart = session()->get('cart');
            } else {
                $oldCart = null;
            }
            $cart = new Cart($oldCart);
            $cart->add($this->product, $this->product->id);
            session()->put('cart',$cart);
            session()->save();

       /* if (Session::has('cart')) {
            var_dump(session()->get('cart'));
        }*/



        //return redirect($_SERVER['HTTP_REFERER']);


       /* }
        else{
            return view('auth.login');
        }*/
    }

    public function getCart(){
    $data_content['curs']=CursController::index();
        $data_nav['curs']=CursController::index();
    
     if(!Session::has('cart')){

         $path='main_site';

         return view('shop.shoping_cart',['products'=> null]);



        }
        $data_nav['menu']=MenuController::index('categories');
        $oldCart = session()->get('cart');
        $cart=new Cart($oldCart);
        $path='shoping_cart';
        dump($cart);
        $data_content['products']=$cart->items;
        
        $data_content['totalPrice']=$cart->totalPrice;

        return view('shop.shoping_cart',$data_content);
    }

    public function showCheckout($error=null){

        $data_nav['menu']=MenuController::index('categories');
        $oldCart = session()->get('cart');
        $cart=new Cart($oldCart);
        $path='shoping_cart';
        $data_content['products']=$cart->items;
        $data_content['error']=$error;
        $data_content['totalPrice']=$cart->totalPrice;
        return view('shop.checkout',$data_content);

    }

    public function getCheckout(Request $request){

        if(!$request->input('email')){
            $error='Не заполненно поле EMAIL';
            return $this->showCheckout($error);

        }

       if(!Session::has('cart')){
            return view('shop.shoping_cart',['products'=> null]);
        }
        $oldCart=session()->get('cart');
        $cart=new Cart($oldCart);
        $total = $cart->totalPrice;
        $mail['subject']='Оформлення заказу';
        $mail['message']='Ви оформили наступний заказ';
        $mail['customer_email']=$request->input('email');
        $mail['client_name']=($request->input('name')) ? $request->input('name') : null;
        $mail['client_city']=($request->input('city')) ? $request->input('city') : null;
        $mail['client_country']=($request->input('country')) ? $request->input('country') : null;
        $mail['orders_details']=($request->input('orders_details')) ? $request->input('orders_details') : null;
        $mail['client_postal_code']=($request->input('postal_code')) ? $request->input('postal_code') : null;
        $mail['client_addess']=($request->input('address')) ? $request->input('address') : null;

        $order=new \App\Order();
        $order->status='pending';
        $order->client_email=$mail['customer_email'];
        $order->client_name=$mail['client_name'];
        $order->client_city=$mail['client_city'];
        $order->client_country=$mail['client_country'];
        $order->orders_details=$mail['orders_details'];
        $order->client_postal_code=$mail['client_postal_code'];
        $order->client_address=$mail['client_addess'];
        $order->save();
        foreach($cart->items as $key=>$item){
            dump('item',$item,$key);
            $orders_good=new \App\OrdersGood();
            $orders_good->order_id=$order->id;
            $orders_good->good_id=$key;
            $orders_good->quantaty=$item['qnt'];
            $orders_good->save();
        }

        // Ship order...

        Mail::to($request->input('email'))->send(new OrderShipped($cart));
        Mail::to('imediasun1@gmail.com')->send(new OrderShipped_to_admin($cart,$mail));
        /*return view('shop.checkout', ['total'=>$total]);*/
        return redirect('show_checkout');
        
    }

    public function billing(Request $request){
        if(!Session::has('cart')){
            return view('shop.shoping_cart',['products'=> null]);
        }
        $data_content['curs']=CursController::index();
        $data_nav['menu']=MenuController::index('categories');
        $oldCart=session()->get('cart');
        $cart=new Cart($oldCart);
        $total = $cart->totalPrice;
        $path='billing';
        $data_content['products']=$cart->items;

        $data_content['totalPrice']=$cart->totalPrice;
        return Display_lib::cart($path,$data_nav,$data_content);

    }


    public function updateCartQty(Request $request){
        $inp=json_decode($request->getContent(), true);

        $oldCart = session()->get('cart');
        $cart=new Cart($oldCart);
        $cart->change_qty($cart->items[$inp['id']],$inp['qty'], $inp['id']);
        session()->put('cart',$cart);
        session()->save();
    }
    
    public function delete_product_by_one(Request $request){
        $id=json_decode($request->getContent(), true);
        if(!Session::has('cart')){
            return view('shop.shoping_cart',['products'=> null]);


        }
        $oldCart = session()->get('cart');
        $cart=new Cart($oldCart);
        $cart->delete_by_one($cart->items[$id], $id);
        session()->put('cart',$cart);
        session()->save();
        //return view('shop.shoping_cart',['products'=> $cart->items, 'totalPrice'=>$cart->totalPrice]);
    }

    public function delete_products(Request $request){
        $id=json_decode($request->getContent(), true);
        if(!Session::has('cart')){
        return view('shop.shoping_cart',['products'=> null]);
        }
        $oldCart = session()->get('cart');
        $cart=new Cart($oldCart);
        $cart->delete_all($cart->items[$id], $id);
        session()->put('cart',$cart);
        session()->save();
        //return view('shop.shoping_cart',['products'=> $cart->items, 'totalPrice'=>$cart->totalPrice]);
    }

}
