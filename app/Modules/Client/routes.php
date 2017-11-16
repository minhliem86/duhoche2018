<?php
/*CLIENT ROUTES*/
Route::group(['namespace' => 'App\Modules\Client\Controllers'], function(){
    Route::get('/test', function(){
        return "client test";
    }) ;
});