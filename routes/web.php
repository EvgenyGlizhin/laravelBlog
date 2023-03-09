<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['namespsce' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'App\Http\Controllers\Main\IndexController');
});

Route::group(['namespase' => 'Admin', 'prefix' => 'admin'], function(){
    Route::group(['namespsce' => 'App\Http\Controllers\Admin\Main'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\Main\IndexController');
    });
    Route::group(['namespace' => 'App\Http\Controllers\Admin\Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\Category\IndexController');
    });

});

Auth::routes();

