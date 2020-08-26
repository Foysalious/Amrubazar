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
Route::get('/front', 'Frontend\homepageController@index');



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
    Route::get('/newsLetter', 'Frontend\homepageController@newsLetter')->name('letter');

});

Route::group(['prefix' => '/AddImage'], function(){
    Route::get('/manage', 'Backend\AddImageController@index')->name('manageImage');
    // Show Create Page and Store after Submit
    Route::get('/create', 'Backend\AddImageController@create')->name('createImage');
    Route::post('/create', 'Backend\AddImageController@store')->name('storeImage');
    // Show Edit Page and Update after Submit
    Route::get('/edit/{id}', 'Backend\AddImageController@edit')->name('editImage');
    Route::post('/edit/{id}', 'Backend\AddImageController@update')->name('updateImage');
    // Delete AddImage From Manage
    Route::post('/delete/{id}', 'Backend\AddImageController@destroy')->name('deleteImage');
});

Route::group(['prefix' => '/ContactInfo'], function(){
    Route::get('/manage', 'Backend\ContactInfoController@index')->name('manageContact');
    // Show Create Page and Store after Submit
    Route::get('/create', 'Backend\ContactInfoController@create')->name('createContact');
    Route::post('/create', 'Backend\ContactInfoController@store')->name('storeContact');
    // Show Edit Page and Update after Submit
    Route::get('/edit/{id}', 'Backend\ContactInfoController@edit')->name('editContact');
    Route::post('/edit/{id}', 'Backend\ContactInfoController@update')->name('updateContact');
    // Delete AddImage From Manage
    Route::post('/delete/{id}', 'Backend\ContactInfoController@destroy')->name('deleteContact');
});


    
   
