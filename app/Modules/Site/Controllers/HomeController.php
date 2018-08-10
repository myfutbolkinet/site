<?php

namespace App\Modules\Site\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::user()){
            echo "Auth";
        }
        else{
            echo "No Auth";
        }


        return view('Site::home/index');




    }

    public function about()
    {
        return view('Site::home/about');
    }

    public function contacts()
    {
        return view('Site::home/contacts');
    }

}
