<?php Route::group( [ 'namespace' => 'App\Modules\Site\Controllers',
    'as' => 'site',
], function(){
    Route::get('/home', ['uses' => 'HomeController@index']);
    Route::get('/about', ['uses' => 'HomeController@about']);
    Route::get('/contacts', ['uses' => 'HomeController@contacts']);
});