<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/show_subcat', 'FuncController@show_subcat');
Route::post('/show_property_categories','FuncController@show_property_categories');
Route::post('/show_parent_categories_tree','FuncController@show_parent_categories_tree');
Route::post('/show_property_by_category','FuncController@show_property_by_category');
Route::post('/if_link_exist','FuncController@if_link_exist');

Auth::routes();
Route::get('/', 'MainController@index');
/*Route::get('/admin', 'AdminController@index');
Route::get('/admin/customers_managment', 'AdminController@customers_managment');
Route::get('/admin/add_good', 'AdminController@add_good');
Route::get('/admin/add_logos', 'AdminController@add_logos');
Route::get('/admin/del_good', 'AdminController@del_good');*/
/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/session',function(){

    dd(csrf_token());
});

Route::post('/functions_images', 'FunctionsController@index');
Route::post('/functions_image', 'FunctionsController@main_image');
Route::post('/functions_form', 'FunctionsController@form');
Route::post('/functions_form_logo', 'FunctionsController@form_logo');
Route::post('/functions_logo', 'FunctionsController@add_logo');
Route::get('/home', 'HomeController@index');
Route::get('/good/{id}', 'GoodController@index')->where('id', '[0-9]+')->name('good');
Route::get('/cabinet/{id}', 'PrivateCabinetController@index')->where('id', '[0-9]+');
Route::get('/cabinet/orders/{id}', 'PrivateCabinetController@orders')->where('id', '[0-9]+');
Route::get('/cabinet/likes/{id}', 'PrivateCabinetController@likes')->where('id', '[0-9]+');
Route::get('/cabinet/messages/{id}', 'PrivateCabinetController@messages')->where('id', '[0-9]+');
Route::get('/category/{id}', 'CategoryController@index')->where('id', '[0-9]+');
Route::get('/category/{id}/{price_low}/{price_hi}', 'CategoryController@index')->where('id', '[0-9]+')->name('category');
Route::get('/contacts', 'MainController@contacts')->where('id', '[0-9]+')->name('contacts');
Route::get('/category/{id}/list', 'CategoryController@list_action')->where('id', '[0-9]+');
Route::post('/MainController/ajax_usersessions', 'MainController@ajax_usersessions');

Route::get('auth/facebook', 'FacebookController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');
Route::get('/good_added', function () {

    return view('good');
})->name('good_added');
/*Route::get('/good_added', function () {
    return view('partner');
})->name('partner_added');*/
Route::get('/not_yours', function () {
    return view('not_yours');
})->name('not_yours');

Route::get('/logout', function () {
Auth::logout();

});
//admin
Route::group(['prefix' => 'admin','middleware'=>['web','auth']],function(){
       //admin
    Route::get('/main',['uses' => 'Admin\IndexController@main','as' => 'adminMain']);
    Route::get('/',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);
    
    Route::post('/func_update_role', 'FunctionsController@role');
    Route::post('/func_delete_user', 'FunctionsController@delete_user');
    Route::post('/func_delete_good', 'FunctionsController@delete_good');
    Route::resource('/add_good','Admin\GoodsController');
    Route::get('/add_logos','Admin\PertnersController@add_logos');
    Route::get('/del_logos','Admin\PertnersController@del_logos');
    Route::get('/categories','Admin\CategoriesController@index');
    Route::get('/partners','Admin\PertnersController@index');
    Route::get('/add_category','Admin\CategoriesController@add_category');
    Route::get('/delete_good','Admin\GoodsController@delete_good');
    Route::get('/good/{id}','Admin\GoodsController@edit_good');
    Route::post('/add_good', 'Admin\GoodsController@add_good');
    Route::resource('/customers_managment','Admin\CustomersController');
});

//superadmin
Route::group(['prefix' => 'superadmin','middleware'=>['web','auth']],function(){

    Route::get('/',['uses' => 'Superadmin\IndexController@index','as' => 'superadminIndex']);
    Route::get('/categories/add','Superadmin\CategoriesController@add_show');
    Route::get('/goods_properties','Superadmin\GoodsPropertiesController@index');
    Route::get('/add_good_property','Superadmin\GoodsPropertiesController@add_property');
    Route::post('/good_property','Superadmin\GoodsPropertiesController@good_property_form');
    Route::post('/edit_good_property_form','Superadmin\GoodsPropertiesController@edit_good_property_form');
    Route::post('/add_category','FuncController@add_category_form');
    Route::get('/good_property/{id}','Superadmin\GoodsPropertiesController@good_property');

});

Route::group(['prefix' => 'salesmanager','middleware'=>['web','auth']],function(){

    Route::get('/',['uses' => 'SalesManager\IndexController@index','as' => 'salesmanagerIndex']);
    Route::get('/contacts/add','SalesManager\ContactsController@add_show');
    Route::get('/contacts','SalesManager\ContactsController@index');
    Route::post('/edit_contact_form','SalesManager\ContactsController@edit_contact_form');
    Route::post('/add_contact','SalesManager\ContactsController@add_contact');
    Route::get('/contact/{id}','SalesManager\ContactsController@show_contact');

});
/*Route::get('sendmail','')*/
Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');
Route::post('/add_to_cart','ShopingCartController@addToCart')->name('add_to_cart');
Route::post('/price_range','CategoryController@price_range')->name('price_range');
Route::post('/send_mail','MainController@send_mail')->name('send_mail');
/*Route::get('/price_range','CategoryController@price_range')->name('price_range');*/
Route::get('/shoping_cart','ShopingCartController@getCart')->name('shoping_cart');
Route::post('/checkout','ShopingCartController@getCheckout')->name('checkout');
Route::get('/billing','ShopingCartController@billing')->name('checkout');
Route::get('/delete_product_by_one/{id}','ShopingCartController@delete_product_by_one')->name('delete_product_by_one');
Route::get('/delete_products/{id}','ShopingCartController@delete_products')->name('delete_products');

Route::post('/add_comment','FunctionsController@addComment')->name('add_comment');
Route::post('/add_question_answer','FunctionsController@addQuestion_answer')->name('add_question_answer');
Route::post('/add_question','FunctionsController@addQuestion')->name('add_question');
Route::post('/delete_question','FunctionsController@deleteQuestion')->name('delete_question');
Route::post('/delete_logotype','FunctionsController@deleteLogotype');
Route::post('/delete_comment','FunctionsController@deleteComment')->name('delete_comment');
Route::post('/add_category','FunctionsController@addCategory')->name('add_category');
Route::post('/update_user_info','FunctionsController@update_user_info')->name('update_user_info');
Route::post('/update_customer_info','FunctionsController@update_customer_info')->name('update_customer_info');
Route::post('/func_change_status','FunctionsController@func_change_status');
Route::post('/func_like_change','FunctionsController@func_like_change');
Route::get('/func_like_delete/{id}/{user}','FunctionsController@func_like_delete')->name('func_like_delete');

Route::post('/change_rating','FunctionsController@change_rating');














Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
