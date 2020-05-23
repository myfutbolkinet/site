<?php

namespace App\Http\Controllers\Opt;

use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;

class OptController extends \App\Http\SiteEntity
{
    //


    protected function menu(){
        return MenuController::index('opt_categories');

    }

    public function index(){
        $data['menu']=$this->menu();
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";

        return view('opt/index',$data);

    }


}
