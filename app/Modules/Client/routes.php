<?php
/*CLIENT ROUTES*/
Route::group(['namespace' => 'App\Modules\Client\Controllers'], function(){
    Route::get('/', ['as' => 'homepage', 'uses' => 'HomeController@index']);
    Route::get('/khuyen-mai', ['as' => 'khuyenmai', 'uses' => 'PromotionController@index']);
    Route::get('/chia-se-trai-nghiem', ['as' => 'testimonial', 'uses' => 'TestimonialController@index']);
    Route::get('/du-hoc-{slug}/{slugCourse}', ['as' => 'country.course', 'uses' => 'CourseController@course'])->where(['slug'=>'[a-zA-Z._\-]+', 'slugCourse' => '[a-zA-Z0-9._\-]+']);
    Route::get('/du-hoc-{slug}', ['as' => 'country', 'uses' => 'CourseController@country'])->where('slug','[a-zA-Z]+');

});