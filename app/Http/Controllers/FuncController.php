<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FuncController extends Controller
{
    //
	private $parent_num=0;
	  public function recursive_cat_names($name,$id_cat){
        $this->parent_num=$this->parent_num+1;
        $data['parent']=DB::table('categories')->where('id', $id_cat)->get();
        if($data['parent'][0]->parent_id==0){

            $_name=$data['parent'][0]->name.' > '.$name;
            $this->cat_name=$_name;

        }
        else{
            $id_cat=$data['parent'][0]->parent_id;
            if($name!==''){
                $name=$data['parent'][0]->name.' > '.$name;
            }
            else{
                $name=$data['parent'][0]->name;
            }
            $this->recursive_cat_names($name,$id_cat);
        }


       if(isset($this->cat_name)){
       $cat_info['name']=$this->cat_name;
       $cat_info['parent_num']=$this->parent_num;
       return $cat_info;
       }

    }
 public function show_subcat(Request $request){
	$id_cat=$request->input('id_cat');
    $data=$this->print_subcat($id_cat);
    return json_encode($data);
    } 

    public function print_subcat($id_cat){

    //find all categories which have parent_id = id_cat
    $data['value']=DB::table('categories')->where('parent_id', $id_cat)->get();
    $data['message']='success';
    if(count($data['value'])<1){
        $data['value']['id']=$id_cat;
        $name='';

        $data['value']['info']=$this->recursive_cat_names($name,$id_cat);
       $data['message']='null';
    }
    return $data;
    }


    public function show_property_categories(Request $request){
    $id=$request->input('prop');

   $data['property']=DB::table('properties')->where('id',$id)->get();
        //Получить все категории связанные с этим свойством
        $cats=$data['property'][0]->categories;
        $cats=explode(',' ,$cats );

        
        foreach($cats as $cat){
            //сформировать строку полный путь к категории
            $data['info'][]=$this->print_subcat($cat);

        }

    return json_encode($data['info']);
    }

}
