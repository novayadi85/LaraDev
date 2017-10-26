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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', function () {
    return view('pages.index');
});


Route::get('pages/', 'PagesController@index');
Route::get('system/', 'SystemController@index');


Route::get('system/{slug}', [
    'uses' => 'SystemController@getPage' 
])->where('slug', '([A-Za-z0-9\-\/]+)');


Route::get('pages/{slug}', [
    'uses' => 'PagesController@getPage' 
])->where('slug', '([A-Za-z0-9\-\/]+)');

