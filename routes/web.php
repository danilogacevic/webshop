<?php

use Illuminate\Support\Facades\Session;

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

//Route::get('/', function () {
//    return view('ecom');
//})->name('ecom');

Auth::routes();

Route::group(['middleware'=>'admin'],function(){

    Route::get('/admin', function () {

        return view('backEnd.index');
    })->name('adminDashboard');

    Route::resource('admin/categories','CategoriesController');

    Route::resource('/admin/photos','PhotosController');

    Route::resource('/admin/products','ProductsController');

});

// Pages

Route::get('/home', 'HomeController@index')->name('home');


// cart

Route::get('/checkout','CartController@index')->name('checkout');

// empty cart

Route::get('/emptyCart','CartController@emptyCart')->name('emptyCart');

// Ecom page

Route::get('/{id?}', 'HomeController@ecom')->name('ecom');

//Single item page

Route::get('/item/{id}','HomeController@item')->name('item');

// add product

Route::post('/add/{id}','CartController@addProduct')->name('addProduct');

// decrease amount

Route::get('/decreaseAmount/{id}','CartController@decreaseQuantity')->name('decreaseAmount');

// increase amount

Route::get('/increaseAmount/{id}','CartController@increaseQuantity')->name('increaseAmount');

// remove product

Route::get('/removeProduct/{id}','CartController@removeProduct')->name('removeProduct');






