<?php

namespace App\Http\Ajax;

use App\Property;
use Illuminate\Http\Request;
use Auth;
use App\Site_categories;
use DB;
class FuncPropertiesClass
{

    public function show_property_by_category(Request $request){
        $id_cat=$request->input('id_cat');

        //Найти в таблице properties все row в которых присутствует id_cat в categories field
        $all_properties=Property::categories();
        var_dump($all_properties);
        foreach($all_properties as $propertie){
            var_dump($propertie->caregories);
            $unserialized=unserialize($propertie->caregories);
            echo "<pre>";
            var_dump($unserialized);
            echo "</pre>";
        }
        $data['property']=DB::table('property_category')->where('property_id',$id)->get();
        die(var_dump($request->input()));
    }

}
