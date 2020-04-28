<?php

namespace App\Http\Controllers;

use App\MailService;
use App\OrdersGood;
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
use App\Order;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\CursController;
class ShopingCartController extends Controller
{
    protected $id;
    protected $qnt;
    protected $product;

    //
    public function showCart(){

        $data_content['cart'] = session()->get('cart');
            return view('main_site.layouts.cart',$data_content);
    }

    public function showShopingCart(){

        $data_content['cart'] = session()->get('cart');
        return view('main_site.shop.shoping_cart_table',$data_content);
    }

    public function addToCart(Request $request){
            $good = Good::with('photos')->find($request->input('id'));
            $this->product = $good;
            $this->product['qnt'] = ($request->input('qnt')) ? (int)$request->input('qnt') : 1;

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
    $data_content['additional_menu'] = \App\MerchantSiteMenuPosition::where('site_id',1)->first()->data;
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
        $data_content['products']=$cart->items;
        
        $data_content['totalPrice']=$cart->totalPrice;
        return view('main_site.shop.shoping_cart',$data_content);
    }

    public function showCheckout($error=null){

        $data_nav['menu']=MenuController::index('categories');
        $oldCart = session()->get('cart');
        $cart=new Cart($oldCart);
        $path='shoping_cart';
        $data_content['products']=$cart->items;
        $data_content['error']=$error;
        $data_content['totalPrice']=$cart->totalPrice;
        return view('main_site.shop.checkout',$data_content);

    }

    public function showCheckoutShipping($error=null){

        $data_nav['menu']=MenuController::index('categories');
        $oldCart = session()->get('cart');
        $cart=new Cart($oldCart);
        $path='shoping_cart';
        $data_content['products']=$cart->items;
        $data_content['error']=$error;
        $data_content['totalPrice']=$cart->totalPrice;
        return view('main_site.shop.checkout_shipping',$data_content);

    }

    public function showCheckoutPayment($error=null){

        $data_nav['menu']=MenuController::index('categories');
        $oldCart = session()->get('cart');
        $cart=new Cart($oldCart);
        $path='shoping_cart';
        $data_content['products']=$cart->items;
        $data_content['error']=$error;
        $data_content['totalPrice']=$cart->totalPrice;
        return view('main_site.shop.checkout_payment',$data_content);

    }

    public function showCheckoutReview($error=null){

        $data_nav['menu']=MenuController::index('categories');
        $oldCart = session()->get('cart');
        $cart=new Cart($oldCart);
        $path='shoping_cart';
        $data_content['products']=$cart->items;
        $data_content['error']=$error;
        $data_content['totalPrice']=$cart->totalPrice;
        return view('main_site.shop.checkout_review',$data_content);

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
        if(!$id){
            $id=$request->input('id');
        }
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
        if(!$id){
            $id=$request->input('id');
        }
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

    public function getCartItems(){


    }

    public function checkoutComplete($error=null){

        $data_nav['menu']=MenuController::index('categories');
        $oldCart = session()->get('cart');
        dump($oldCart);
        $path='shoping_cart';


        //$order->user_id = Auth()->id();
        $latestOrder = \App\Order::orderBy('created_at','DESC')->first();
        if(!$latestOrder){
            $id=1;
        }
        else{
            $id=$latestOrder->id;
        }
        $s = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 2)), 0, 2);
        $order = new Order;
        $order_nr=$s.str_pad($id + 1, 8, "0", STR_PAD_LEFT);
        $order->order_nr = $order_nr;
        $order->status='not_payed';
        $order->client_email=session()->get('client_email');
        $order->client_phone=session()->get('client_phone');
        $order->client_name=session()->get('client_name');
        $order->save();
        foreach($oldCart->items as $item){
            $orderProduct = new OrdersGood();
            $orderProduct->order_id=$order_nr;
            $orderProduct->good_id=$item['item']->id;
            $orderProduct->quantaty=$item['qnt'];
            $orderProduct->save();
        }




        $data_content['error']=$error;
        return view('main_site.shop.checkout_complete',$data_content);

    }

    public function saveCustomerAddress($link){

        session()->put('client_email',Input::get('email'));
        session()->put('client_phone',Input::get('phone'));
        session()->put('client_name',Input::get('name'));
        session()->put('client_last_name',Input::get('name'));
        //dd(session()->get('customer_email'));
        return redirect($link);
    }

}
