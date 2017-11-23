<?php
/*CLIENT ROUTES*/
Route::group(['namespace' => 'App\Modules\Client\Controllers'], function(){
    Route::get('/', ['as' => 'homepage', 'uses' => 'HomeController@index']);
    Route::get('/khuyen-mai', ['as' => 'khuyenmai', 'uses' => 'PromotionController@index']);
    Route::get('/chia-se-trai-nghiem', ['as' => 'testimonial', 'uses' => 'TestimonialController@index']);
    Route::get('/chia-se-trai-nghiem/{slug}', ['as' => 'testimonial.detail', 'uses' => 'TestimonialController@detail'])->where('slug','[0-9a-zA-Z._\-]+');
    Route::get('/du-hoc-{slug}', ['as' => 'country', 'uses' => 'CourseController@country'])->where('slug','[a-zA-Z._\-]+');
    Route::get('/du-hoc-{slug}/{slugCourse}', ['as' => 'country.course', 'uses' => 'CourseController@course'])->where(['slug'=>'[a-zA-Z._\-]+', 'slugCourse' => '[a-zA-Z0-9._\-]+']);


    View::composer(['Client::layouts.discover', 'Client::layouts.header'], function($view)  {
        $country = new App\Repositories\CountryRepository;
        $country_composer = $country->getComposer(['title','slug', 'img_url']);
        $view->with('country_composer', $country_composer);
    });
});