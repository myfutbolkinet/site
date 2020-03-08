<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Input;
use DB;
use App\Good;
use App\Logo;
use App\Category;
use App\Http\Libraries\Display_lib;
use App\Http\Controllers\MenuController;
use App\Mail\Send_mail;
use App\Http\Controllers\CursController;
use Illuminate\Support\Facades\Mail;
class MainController extends Controller
{

    public function index()
    {

        $data['menu']=MenuController::index('categories');


       //goods
   $data['latest']=Good::orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'desc')
        ->take(10)
        ->get()->load('photos');

        $data['onsale']=Good::where('category',6)
        ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->take(10)
            ->get()->load('photos');
        //page

        $data['title']="Industry";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";

       return view('agregator.index',$data);
    }

    public function contacts()
    {
    $data=array();
    $data_content=array();
    $data_nav['curs']=CursController::index();
    $data_nav['menu']=MenuController::index('categories');
    $path='contacts';
    return Display_lib::index($path,$data,$data_nav,$data_content);
    }

    public function send_mail(){

     Mail::to('imediasun1@gmail.com')->send(new Send_mail($_POST));
     return view('mail.checkout');
    }


}
