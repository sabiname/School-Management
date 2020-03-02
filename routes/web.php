<?php

use RealRashid\SweetAlert\Facades\Alert;
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

Route::get('/test', function () {

    return view('test');

});


Route::resource('testimonials','TestimonialController');
Route::resource('notice','NoticeController');
Route::resource('gallery','GalleryController');
Auth::routes();

Route::get('dashboard', 'HomeController@index');
Route::get('logout', 'HomeController@logout');
Route::get('/search-notice','NoticeController@search');
Route::get('/search-gallery','GalleryController@search');
Route::get('/search-testimonial','TestimonialController@search');

