<?php

namespace App\Http\Ajax;

use App\Property;
use App\Property_data;
use Illuminate\Http\Request;
use Auth;
use App\Site_categories;
use DB;
use App\Category;
class FuncPropertiesClass
{

    public function show_property_by_category(Request $request){
        $id_cat=$request->input('id_cat');
        //Найти в таблице properties все row в которых присутствует id_cat в categories field
        $all_properties=Category::with('properties')->find($id_cat);
        foreach($all_properties->properties as $property){
            $prop=[];
            $tmp=unserialize($property['original']['data']);
            $property->data=implode(",", $tmp);$property->data;

            foreach($property->property_datas as $value){
                $prop['data'][]=[
                    'id'=>$value->id,
                    'data'=>$value->data
                ];
            }

            $prop['name']=$property->name;
            $prop['id']=$property->id;
            $properties[]=$prop;
        }
       return json_encode($properties);
    }

}
