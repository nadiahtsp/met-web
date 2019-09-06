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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('about', function () {
//     return view('about');
// });

// Route::get('portfolio', function () {
//     return view('portfolio');
// });

// Route::get('service', function () {
//     return view('service');
// });

// Route::get('carrer', function () {
//     return view('carrer');
// });

// Route::get('blog', function () {
//     return view('blog');
// });

// Pake ini aja sayang biar bisa make controller, jadi pengembangannya lebih mudah
// Semua file pages(dari about sampai service) aku masukin kedalam folder pages ya
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/service', 'PagesController@service');
Route::get('/carrer', 'PagesController@carrer');
Route::get('/blog', 'PagesController@blog');

// Just for testing in old file
Route::get('/index-copy', function () {
    return view('pages-copy.index-copy');
});
// This is just testing
Route::get('/test', 'HomeController@test')->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
