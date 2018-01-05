<?php
/**
 * Created by PhpStorm.
 * User: imedi
 * Date: 01.01.2018
 * Time: 23:08
 */

namespace App\Http;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Site_categories;

abstract class SiteEntity extends Controller
{



    abstract public function CategoriesMenu();

public function __construct(){

}
public function get_host(Request $request){
    $this->host=$request->getHttpHost();
}





}