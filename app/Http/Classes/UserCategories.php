<?php
/**
 * Created by PhpStorm.
 * User: imedi
 * Date: 06.01.2018
 * Time: 21:58
 */

namespace App\Http\Classes;

use App\Category;
class UserCategories implements Categories
{
    public $user_categories;
    public function __construct(CategoriesFactory $category)
    {
    $this->user_categories=$category->user_categories;
    }

    public function show_categories()
    {
        // TODO: Implement show_categories() method.
        $categories = Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();


        foreach ($categories as $category) {
            if(isset($this->user_categories['categories_array'][0]) && $this->user_categories['categories_array'][0]->categories!==''){
                if (in_array($category->id, unserialize($this->user_categories['categories_array'][0]->categories))) {
                    $category->checked='checked';
                    $data['categories'][] = $category;
                }
              }
            else{
                $data['categories']=null;
            }
        }

        return $data['categories'];
    }
}