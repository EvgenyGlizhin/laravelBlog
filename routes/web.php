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
        Route::get('/', 'App\Http\Controllers\Admin\Category\IndexController')->name('admin.category.index');
        Route::get('/create', 'App\Http\Controllers\Admin\Category\CreateController')->name('admin.category.create');
        Route::post('/', 'App\Http\Controllers\Admin\Category\StoreController')->name('admin.category.store');
        Route::get('/{category}', 'App\Http\Controllers\Admin\Category\ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'App\Http\Controllers\Admin\Category\EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'App\Http\Controllers\Admin\Category\UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'App\Http\Controllers\Admin\Category\DeleteController')->name('admin.category.delete');

    });
    Route::group(['namespace' => 'App\Http\Controllers\Admin\Tag', 'prefix' => 'tags'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\Tag\IndexController')->name('admin.tag.index');
        Route::get('/create', 'App\Http\Controllers\Admin\Tag\CreateController')->name('admin.tag.create');
        Route::post('/', 'App\Http\Controllers\Admin\Tag\StoreController')->name('admin.tag.store');
        Route::get('/{tag}', 'App\Http\Controllers\Admin\Tag\ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'App\Http\Controllers\Admin\Tag\EditController')->name('admin.tag.edit');
        Route::patch('/{tag}', 'App\Http\Controllers\Admin\Tag\UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}', 'App\Http\Controllers\Admin\Tag\DeleteController')->name('admin.tag.delete');

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
