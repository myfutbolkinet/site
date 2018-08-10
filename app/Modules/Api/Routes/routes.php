<?php Route::group(
    ['prefix' => 'api',
    'namespace' => 'App\Modules\Api\Controllers',
    'as' => 'api',
], function(){
    Route::get('/get_categories/{id}', ['uses' => 'CategoriesController@GetCategories']);
    Route::get('/get_list_products', ['uses' => 'ProductsController@GetListProducts']);
    Route::get('/get_product', ['uses' => 'ProductsController@GetProduct']);
    Route::get('/get_page', ['uses' => 'HomeController@contacts']);
});