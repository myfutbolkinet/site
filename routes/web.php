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


Auth::routes();



$domain=Request::server("HTTP_HOST");

if($domain != "magelan.loc"){

// TODO Получить из базы данных список активных доменов
    //Если среди активных доменов нет входящего выдать ошибку
    $domains_array=['eco-new.life','imedia.eco-new.life'];

    Route::get('/',[
        'uses' => 'SiteController@index',
        'as' => 'site.route'
    ]);

    //TODO OOP
    //TODO Перенести всю логику связанную с категориями в FuncCategoriesController
    //TODO OOP
    Route::post('/show_subcat', 'FuncController@show_subcat');
    Route::post('/show_subcat_all_levels', 'FuncController@show_subcat_all_levels');
    Route::post('/show_subcat_all_levels_back', 'FuncController@show_subcat_all_levels_back');
    Route::post('/show_parent_cats', 'FuncController@show_parent_cats');
    Route::post('/save_cats_list', '\App\Http\Ajax\FuncCategoriesClass@save_cats_list');
    Route::post('/show_cats_list', '\App\Http\Ajax\FuncCategoriesClass@show_cats_list');
    Route::post('/show_property_categories','FuncController@show_property_categories');
    Route::post('/show_parent_categories_tree','FuncController@show_parent_categories_tree');
    Route::post('/show_property_by_category','\App\Http\Ajax\FuncPropertiesClass@show_property_by_category');
    Route::post('/if_link_exist','FuncController@if_link_exist');



    //admin

    Route::group(['prefix' => 'admin'],function(){

        Route::post('/add_season','SiteAdmin\SubordinateListsController@addSeason');
        Route::post('/get_seasons','SiteAdmin\SubordinateListsController@getSeasons');
        Route::post('/delete_season','SiteAdmin\SubordinateListsController@deleteSeason');

        Route::post('/add_product','SiteAdmin\SubordinateListsController@addProduct');
        Route::post('/get_products','SiteAdmin\SubordinateListsController@getProducts');
        Route::post('/delete_product','SiteAdmin\SubordinateListsController@deleteProduct');


        Route::post('/add_fabric','SiteAdmin\SubordinateListsController@addFabric');
        Route::post('/get_fabrics','SiteAdmin\SubordinateListsController@getFabrics');
        Route::post('/delete_fabric','SiteAdmin\SubordinateListsController@deleteFabric');


        Route::post('/add_size','SiteAdmin\SubordinateListsController@addSize');
        Route::post('/get_sizes','SiteAdmin\SubordinateListsController@getSizes');
        Route::post('/delete_size','SiteAdmin\SubordinateListsController@deleteSize');

        Route::post('/add_decoration','SiteAdmin\SubordinateListsController@addDecoration');
        Route::post('/get_decorations','SiteAdmin\SubordinateListsController@getDecorations');
        Route::post('/delete_decoration','SiteAdmin\SubordinateListsController@deleteDecoration');


        Route::post('/send_crop_color_to_server','SiteAdmin\SiteGoodsController@cropColorToServer');



        Route::get('/subordinate lists','SiteAdmin\SubordinateListsController@index')->name('site.admin.subordinate_lists');
        Route::post('/add_photo_file','\App\Http\Ajax\FuncImagesClass@add_photo_file');
        Route::post('/save_cats_filter', '\App\Http\Ajax\FuncCategoriesClass@save_cats_filter');
        Route::get('/login', 'Auth\SiteAdminLoginController@showLoginForm')->name('site.admin.login');
        Route::post('/login', 'Auth\SiteAdminLoginController@login')->name('site.admin.login.submit');
        Route::get('/', 'SiteAdmin\SiteAdminController@index')->name('site.admin.dashboard');
        Route::get('/add_good','SiteAdmin\SiteGoodsController@index')->name('site.admin.add_good');
        Route::get('/add_good_inspinia','SiteAdmin\SiteGoodsController@inspinia')->name('site.admin.add_good_inspinia');
        Route::post('/add_good', 'SiteAdmin\SiteGoodsController@add_good');
        Route::get('/goods_and_groups/{page?}', 'SiteAdmin\SiteGoodsController@showGoodsAndGroups');
        Route::get('/goods_by_filter/{goods}', 'SiteAdmin\SiteGoodsController@showGoodsByFilter')->name('site.admin.show_good_by_filter');
        Route::post('/fileupload', '\App\Http\Ajax\FuncUploadClass@actionImagesUpload');
        Route::post('/delete_image_from_session', '\App\Http\Ajax\FuncUploadClass@actionImagesDelFromSession');
        //admin
       /* Route::get('/main',['uses' => 'SiteAdmin\IndexController@main','as' => 'adminMain']);

        Route::post('/func_update_role', 'FunctionsController@role');
        Route::post('/func_delete_user', 'FunctionsController@delete_user');
        Route::post('/func_delete_good', 'FunctionsController@delete_good');

        Route::get('/add_logos','SiteAdmin\PertnersController@add_logos');
        Route::get('/del_logos','SiteAdmin\PertnersController@del_logos');
        Route::get('/categories','SiteAdmin\CategoriesController@index');
        Route::get('/partners','SiteAdmin\PertnersController@index');
        Route::get('/add_category','SiteAdmin\CategoriesController@add_category');
        Route::get('/delete_good','SiteAdmin\GoodsController@delete_good');
        Route::get('/good/{id}','SiteAdmin\GoodsController@edit_good');

        Route::resource('/customers_managment','SiteAdmin\CustomersController');*/

        Route::get('/menu_areas','SiteAdmin\MenuController@index')->name('site.admin.menu_areas');
        Route::post('/Ajax/FuncImagesClass','\App\Http\Ajax\FuncImagesClass@index');





    });
    Route::group(['prefix' => 'privat'],function(){
        Route::get('/privat3', 'Privat\Privat3Controller@index');
        Route::get('/privat3_view', 'Privat\Privat3Controller@showCabinet');
    });
    Route::get('/potrebitelskie_tovari', 'MainController@index');

    Route::post('/get_designs','GetDesignController@getDesign');
    Route::post('/site/get_horisontal','SiteController@getHorisontal');
    Route::post('/site/put_horisontal','SiteController@putHorisontal');
    Route::post('/cabinet', 'Privat\Privat3Controller@showMainPrivatInformation');
    Route::post('/goods_and_groups', 'Privat\Privat3Controller@showGoodsAndGroups');
    Route::post('/goods_and_groups_table', 'Privat\Privat3Controller@showGoodsAndGroupsTable');
    Route::post('/get_goods_and_groups_filters', 'Privat\Privat3Controller@getGoodsAndGroupsFilters');
    Route::post('/privat/showCompanyMenu', 'Privat\Privat3Controller@showCompanyMenu');
    Route::post('/privat/showEditHorisontalMenu', 'Privat\Privat3Controller@showEditHorisontalMenu');
    Route::get('/goods/show_add_item', 'Privat\Privat3Controller@ShowGoodsAddItem');
    Route::post('/goods/upload_files', 'Privat\Privat3Controller@UploadGoodsFiles');




}


Route::domain('magelan.loc')->group(function () {



Route::post('/show_subcat', 'FuncController@show_subcat');
Route::post('/show_property_categories','FuncController@show_property_categories');
Route::post('/show_parent_categories_tree','FuncController@show_parent_categories_tree');
Route::post('/show_property_by_category','FuncController@show_property_by_category');
Route::post('/if_link_exist','FuncController@if_link_exist');
/*
*/
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
/*Route::group(['prefix' => 'admin','middleware'=>['web','auth']],function(){
       //admin
    Route::get('/main',['uses' => 'SiteAdmin\IndexController@main','as' => 'adminMain']);
    Route::get('/',['uses' => 'SiteAdmin\IndexController@index','as' => 'adminIndex']);
    
    Route::post('/func_update_role', 'FunctionsController@role');
    Route::post('/func_delete_user', 'FunctionsController@delete_user');
    Route::post('/func_delete_good', 'FunctionsController@delete_good');
    Route::resource('/add_good','SiteAdmin\GoodsController');
    Route::get('/add_logos','SiteAdmin\PertnersController@add_logos');
    Route::get('/del_logos','SiteAdmin\PertnersController@del_logos');
    Route::get('/categories','SiteAdmin\CategoriesController@index');
    Route::get('/partners','SiteAdmin\PertnersController@index');
    Route::get('/add_category','SiteAdmin\CategoriesController@add_category');
    Route::get('/delete_good','SiteAdmin\GoodsController@delete_good');
    Route::get('/good/{id}','SiteAdmin\GoodsController@edit_good');
    Route::post('/add_good', 'SiteAdmin\GoodsController@add_good');
    Route::resource('/customers_managment','SiteAdmin\CustomersController');
});*/

//superadmin
Route::group(['prefix' => 'superadmin'],function(){

    Route::get('/categories_to_xml', 'Tmp\CategoriesSeedtToXmlController@index');
    Route::get('/categories_from_xml', 'Tmp\CategoriesSeedtToXmlController@from');
    Route::post('/add_category_photo','\App\Http\Ajax\FuncImagesClass@add_category_photo');

    Route::get('/login', 'Auth\SuperAdminLoginController@showLoginForm')->name('superadmin.login');
    Route::post('/login', 'Auth\SuperAdminLoginController@login')->name('superadmin.login.submit');
    Route::get('/', 'SuperAdmin\SuperAdminController@index')->name('superadmin.dashboard');
    //Route::get('/',['uses' => 'Superadmin\IndexController@index','as' => 'superadminIndex']);
    Route::get('/categories/add','Superadmin\CategoriesController@add_show');
    Route::get('/goods_properties','Superadmin\GoodsPropertiesController@index');
    Route::get('/add_good_property','Superadmin\GoodsPropertiesController@add_property');
    Route::post('/good_property','Superadmin\GoodsPropertiesController@good_property_form');
    Route::post('/edit_good_property_form','Superadmin\GoodsPropertiesController@edit_good_property_form');
    Route::post('/add_category','FuncController@add_category_form');
    Route::get('/good_property/{id}','Superadmin\GoodsPropertiesController@good_property');
    Route::get('/add_pictures','Superadmin\CategoriesPicturesController@index');

});

Route::group(['prefix' => 'salesmanager'],function(){

    Route::get('/',['uses' => 'SalesManager\IndexController@index','as' => 'salesmanagerIndex']);
    Route::get('/contacts/add','SalesManager\ContactsController@add_show');
    Route::get('/contacts','SalesManager\ContactsController@index');
    Route::post('/edit_contact_form','SalesManager\ContactsController@edit_contact_form');
    Route::post('/add_contact','SalesManager\ContactsController@add_contact');
    Route::post('/email_check','SalesManager\ContactsController@check_email');
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












/*

Auth::routes();*/

Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@index');

});

