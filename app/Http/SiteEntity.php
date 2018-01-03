<?php
/**
 * Created by PhpStorm.
 * User: imedi
 * Date: 01.01.2018
 * Time: 23:08
 */

namespace App\Http;



use App\Http\Controllers\Controller;

abstract class SiteEntity extends Controller implements Categories
{


    protected $host;
    abstract public function CategoriesMenu();



    public function get_categories(){

        //TODO get current categories from database
        dump( 'user_categories');
    }
}