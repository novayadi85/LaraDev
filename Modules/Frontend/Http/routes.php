<?php

Route::group(['middleware' => 'web', 'prefix' => 'frontend', 'namespace' => 'Modules\Frontend\Http\Controllers'], function()
{
    Route::get('/', 'FrontendController@index');
    Route::get('/css', 'FrontendController@render_css');
    Route::get('/js', 'FrontendController@render_js');
});
