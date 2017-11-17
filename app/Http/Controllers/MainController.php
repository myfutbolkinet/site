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
    //
  /*  public function __construct()
    {
        $this->middleware('auth');
    }*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    //Get data from DB
        //menu
        
        $data_nav['menu']=MenuController::index('categories');
        
    //logos_of_partners 
  /*  $data_content['logos']=Logo::orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'desc')
        ->take(10)
        ->get();*/

        $data_nav['curs']=CursController::index();
        $data_content['curs']=CursController::index();
        //goods
   $data_content['latest']=Good::orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'desc')
        ->take(10)
        ->get()->load('photos');

        $data_content['onsale']=Good::where('category',6)
        ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->take(10)
            ->get()->load('photos');
        //page

        $data_content['title']="Industry";
        $path='main_page';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";

       return Display_lib::first_page($path,$data,$data_nav,$data_content);
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
