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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/test{index}", 'TestController@test')->where('index', '[0-9]+');
Route::get("/list-points", 'StatisticController@listPoint')->name('list.point');
Route::get("/list-ip", 'StatisticController@listIP')->name('list.ip');

Route::get("/point-info/{index}", 'StatisticController@pointInfo')->name('info.point');
Route::get("/ip-info/{ip}", 'StatisticController@IPInfo')->name('info.ip');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
