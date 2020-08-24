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

Route::get('/', function () {
    return view('Backend.template.layout');
});
Route::group(['prefix' => '/categories'], function(){
    Route::get('/manage', 'Backend\CategoryController@index')->name('manageCategory');
    // Show Create Page and Store after Submit
    Route::get('/create', 'Backend\CategoryController@create')->name('createCategory');
    Route::post('/create', 'Backend\CategoryController@store')->name('storeCategory');
    // Show Edit Page and Update after Submit
    Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('editCategory');
    Route::post('/edit/{id}', 'Backend\CategoryController@update')->name('updateCategory');
    // Delete Category From Manage
    Route::post('/delete/{id}', 'Backend\CategoryController@destroy')->name('deleteCategory');
});