<?php
/**
 * Created by PhpStorm.
 * User: imedi
 * Date: 06.01.2018
 * Time: 21:58
 */

namespace App\Http\Classes;
use Illuminate\Http\Request;
use App\Category;
use App\Site_categories;
class AllCategories implements Categories
{
    public $user;
    public $user_categories;
    public function __construct(CategoriesFactory $category)
    {

      $this->user=$category->user;

      $this->user_categories=$category->user_categories;
    }

    public function show_categories()
    {
        // Implement show_categories() method.
        $data['categories']=Category::orderBy('parent_id', 'asc')
           ->orderBy('created_at', 'desc')
           ->orderBy('updated_at', 'desc')
           ->get();
        //dd( $data['categories']);
        //dd($this->user_categories);
        if($this->user_categories['categories_array'] && $this->user_categories['categories_array'][0]->categories!==''){

            $data['site_categories']=unserialize($this->user_categories['categories_array'][0]->categories);

            foreach($data['categories'] as $category){
                if(in_array($category->id,$data['site_categories'])){
                    $category->checked='checked';
                }
                else{
                    $category->checked='';
                }

            }
            //$data['categories']=$categories;
            $data['json']=json_encode($data['site_categories']);
            return $data;
        }
        else{

            return $data;
        }
    }


}