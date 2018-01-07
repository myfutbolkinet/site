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
    public function __construct()
    {

            $this->user=Auth::guard('admin')->user()->id;
            $this->user_categories['categories_array']=$this->init_categories()['categories_array'];//сериализованный массив категорий по юзеру
            $this->user_categories['row']=$this->init_categories()['row'];
            //$this->user_categories['categories']=$this->CategoriesMenu();//Категории только принадлежащие юзеру
    }

    public function get_categories($type){
        switch($type){
            case "All":return new AllCategories($this);
            case "User":return new UserCategories();
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


}