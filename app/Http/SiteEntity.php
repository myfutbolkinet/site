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
use App\Category;

abstract class SiteEntity extends Controller
{


    public function CategoriesMenu()
    {
        $categories = Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        dump('Не правильно',$this->user_categories['categories_array']);
        foreach ($categories as $category) {

            if(isset($this->user_categories['categories_array'][0]) && $this->user_categories['categories_array'][0]->categories!==''){

            if (in_array($category->id, unserialize($this->user_categories['categories_array'][0]->categories))) {
                $data['categories'][] = $category;
          }
        }
        else{
            $data['categories']=null;
        }
        }

        return $data['categories'];
    }

    public function __construct()
    {

    }

    public function get_host(Request $request)
    {
        $this->host = $request->getHttpHost();
    }


}