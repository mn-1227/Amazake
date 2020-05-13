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
    Route::get('amazake/create', 'Admin\AmazakeController@add');
    Route::post('amazake/create', 'Admin\AmazakeController@create'); 
    Route::get('amazake', 'Admin\AmazakeController@index');
    Route::get('amazake/edit', 'Admin\AmazakeController@edit');
    Route::post('amazake/edit', 'Admin\AmazakeController@update');
    Route::get('amazake/delete', 'Admin\AmazakeController@delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
