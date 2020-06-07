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

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/index', 'ProductController@index');
Route::post('/store', [
    'as'=> 'store',
    'uses'=>'ProductController@store'
]);

Route::get('/home', 'HomeController@index')->name('home');
