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

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/products', 'ProductController');
Route::resource('/reviews', 'ReviewController');
Route::resource('/stores', 'StoreController');

Route::group(["middleware" => ["auth"]], function() {
    // Alla routes här har middleware auth
    // ...
    Route::get('/reviews/create/{id}', 'ReviewController@create');
    Route::post('/reviews/{id}', 'ReviewController@store');

});

Auth::routes();


