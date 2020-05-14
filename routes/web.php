<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    //甘酒情報ページ
    Route::get('amazake/create', 'Admin\AmazakeController@add');
    Route::post('amazake/create', 'Admin\AmazakeController@create'); 
    Route::get('amazake', 'Admin\AmazakeController@index');
    Route::get('amazake/edit', 'Admin\AmazakeController@edit');
    Route::post('amazake/edit', 'Admin\AmazakeController@update');
    Route::get('amazake/delete', 'Admin\AmazakeController@delete');
    //甘酒の知識ページ
    Route::get('tishiki/create', 'Admin\TishikiController@add');
    Route::post('tishiki/create', 'Admin\TishikiController@create'); 
    Route::get('tishiki', 'Admin\TishikiController@index');
    Route::get('tishiki/edit', 'Admin\TishikiController@edit');
    Route::post('tishiki/edit', 'Admin\TishikiController@update');
    Route::get('tishiki/delete', 'Admin\TishikiController@delete');
    //関連商品ページ
    Route::get('item/create', 'Admin\ItemController@add');
    Route::post('item/create', 'Admin\ItemController@create'); 
    Route::get('item', 'Admin\ItemController@index');
    Route::get('item/edit', 'Admin\ItemController@edit');
    Route::post('item/edit', 'Admin\ItemController@update');
    Route::get('item/delete', 'Admin\ItemController@delete');
    //旅記録ページ
    Route::get('travel/create', 'Admin\TravelController@add');
    Route::post('travel/create', 'Admin\TravelController@create'); 
    Route::get('travel', 'Admin\TravelController@index');
    Route::get('travel/edit', 'Admin\TravelController@edit');
    Route::post('travele/edit', 'Admin\TravelController@update');
    Route::get('travel/delete', 'Admin\TravelController@delete');
    //料理のページ
    Route::get('cooking/create', 'Admin\CookingController@add');
    Route::post('cooking/create', 'Admin\CookingeController@create'); 
    Route::get('cooking', 'Admin\CookingController@index');
    Route::get('cooking/edit', 'Admin\CookingController@edit');
    Route::post('cooking/edit', 'Admin\CookingController@update');
    Route::get('cooking/delete', 'Admin\CookingeController@delete');
    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
