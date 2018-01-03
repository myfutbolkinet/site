<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\Display_lib;
use App\Site;
use Auth;
class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

        dd($this->host);
        $collection = Site::all();
        $site= $collection;

        dd($site);
        if($site){}
        $data_nav=array();
        $data_content['title']="Industry";
        $path='site/main_template';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::site($path,$data,$data_nav,$data_content);
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




}
