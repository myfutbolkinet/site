<?php

namespace App\Http\Controllers\SiteAdmin;

use Illuminate\Http\Request;

use App\AdditionalMenu;
class AdditionalMenuController extends \App\Http\SiteEntity
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:admin');
    }

    public function getData(Request $request){

        return AdditionalMenu::where('nestable_id',$request->input('id'))->first();

    }


    public function saveData(Request $request){
        $update=[
                "text"=>$request->input('name'),
                "link"=>$request->input('link')

        ];
        return AdditionalMenu::where('nestable_id',$request->input('nestable_id'))->update($update);

    }

}
