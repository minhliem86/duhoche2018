<?php
/*ADMIN ROUTES*/
Route::group(['prefix' => 'admin', 'namespace' => 'App\Modules\Admin\Controllers'], function(){
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@logout');

    // Registration Routes...
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', 'Auth\AuthController@postRegister');

    // Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');

    // Change Password
    Route::post('/changePass', ['as' => 'admin.changePass.postChangePass', 'uses'=>'ProfileController@postChangePass']);

    /*ROLE, PERMISSION*/
    Route::get('/create-role', ['as' => 'admin.createRole', 'uses' => 'Auth\RoleController@createRole']);
    Route::post('/create-role', ['as' => 'admin.postCreateRole', 'uses' => 'Auth\RoleController@postCreateRole']);
    Route::post('/ajax-role', ['as' => 'admin.ajaxCreateRole', 'uses' => 'Auth\RoleController@postAjaxRole']);
    Route::post('/ajax-permission', ['as' => 'admin.ajaxCreatePermission', 'uses' => 'Auth\RoleController@postAjaxPermission']);

    Route::group(['middleware' => 'auth.admin'], function(){
        Route::get('/dashboard', ['as'=>'admin.dashboard', function(){
            return view('Admin::pages.dashboard.index');
        }]);

        /*COUNTRY*/
        Route::get('country/getAjax', ['as' => 'admin.country.getAjax', 'uses' => 'CountryController@getAjax']);
        Route::post('country/deleteAll', ['as' => 'admin.country.deleteAll', 'uses' => 'CountryController@deleteAll']);
        Route::post('country/postAjaxUpdateOrder', ['as' => 'admin.country.postAjaxUpdateOrder', 'uses' => 'CountryController@postAjaxUpdateOrder']);
        Route::post('country/AjaxRemovePhoto', ['as' => 'admin.country.AjaxRemovePhoto', 'uses' => 'CountryController@AjaxRemovePhoto']);
        Route::post('country/AjaxUpdatePhoto', ['as' => 'admin.country.AjaxUpdatePhoto', 'uses' => 'CountryController@AjaxUpdatePhoto']);
        Route::post('country/updateStatus', ['as' => 'admin.country.updateStatus', 'uses' => 'CountryController@updateStatus']);
        Route::resource('/country','CountryController');
    });
});