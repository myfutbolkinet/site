<?php
/**
 * Created by PhpStorm.
 * User: imedi
 * Date: 06.01.2018
 * Time: 22:01
 */

namespace App\Http\Classes;

use Auth;
use App\Site_categories;
class CategoriesFactory
{
    public $user;
    public $user_categories;
    public function __construct($type=null)
    {

            $this->user=Auth::guard('admin')->user()->id;

            if(!$type){
            $this->user_categories['categories_array']=$this->init_categories()['categories_array'];//сериализованный массив категорий по юзеру
            $this->user_categories['row']=$this->init_categories()['row'];
            //$this->user_categories['categories']=$this->CategoriesMenu();//Категории только принадлежащие юзеру
            }
            else{
            $this->user_categories['categories_array']=$this->init_filter()['categories_array'];//сериализованный массив категорий по юзеру
            $this->user_categories['row']=$this->init_filter()['row'];
            }
    }

    public function get_categories($type){
        switch($type){
            case "All":return new AllCategories($this);
            case "User":return new UserCategories($this);
            default: throw new \Exception('Wrong type!');
        }
    }

    public function init_categories(){
        $res= Site_categories::where('user_id', $this->user)
            ->get();
        if(count($res)>0){

            $result['row']=$res[0]->id;
            $result['categories_array']=$res;
            return $result;
        }else{
            return null;
        }
    }
//ToDo:: reformat two functions to one (init_categories && init_filter)
    public function init_filter(){
        $res= \App\SiteGoodsFilter::where('user_id', $this->user)
            ->get();
        if(count($res)>0){

            $result['row']=$res[0]->id;
            $result['categories_array']=$res;
            return $result;
        }else{
            return null;
        }
    }


}