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
Route::get('/portfolio-page/{id}', 'PagesController@portfolioPages');

// Just for testing in old file
Route::get('/index-copy', function () {
    return view('pages-copy.index-copy');
});
// This is just testing
Route::get('/test', 'HomeController@test')->name('test');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/profile-met', 'HomeController@profile')->name('profile-met');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/about-admin', 'HomeController@about')->name('about-admin');

//portfolio
Route::get('/portfolio-admin', 'HomeController@portfolio')->name
('portfolio-admin');
Route::get('/portfolio-edit/{id}','HomeController@portfolioedit');
Route::get('/portfolio-add','HomeController@portfolioadd');
Route::get('/portfolio-edit-photo/{id}','HomeController@portfolioeditfoto');

Route::get('/services', 'HomeController@services')->name('services');

//career
Route::get('/career-admin', 'HomeController@career')->name('career-admin');
Route::get('/career-edit/{id}','HomeController@careeredit');
Route::get('/career-add','HomeController@careeradd');

//testimoni page
Route::get('/testimoni', 'HomeController@testimoni')->name('testimoni');
Route::get('/testimoni-edit/{id}','HomeController@testimoniedit');
Route::get('/testimoni-add','HomeController@testimoniadd');

//client page
Route::get('/client', 'HomeController@client')->name('client');
Route::get('/client-edit/{id}','HomeController@clientedit');
Route::get('/client-add','HomeController@clientadd');
Route::get('/client-edit-photo/{id}','HomeController@clienteditfoto');

//pilar page
Route::get('/pillar', 'HomeController@pilar')->name('pillar');
Route::get('/pilar-edit/{id}','HomeController@pilaredit');
Route::get('/pilar-add','HomeController@pilaradd');

//service page
Route::get('/service-admin', 'HomeController@service')->name('service-admin');
Route::get('/service-edit/{id}','HomeController@serviceedit');
Route::get('/service-add','HomeController@serviceadd');

//media page
Route::get('/social-media','HomeController@media')->name('social-media');
Route::get('/media-edit/{id}','HomeController@mediaedit');
Route::get('/media-add','HomeController@mediaadd');

//layout page
Route::get('/profil', 'PagesController@layout')->name('layout');

// Update General
Route::put('/general/update/{id}', 'GeneralController@update');
Route::put('/general/updateAbout/{id}', 'GeneralController@updateAbout');
Route::put('/general/updateProfile/{id}', 'GeneralController@updateProfile');
Route::put('/general/updateFoto/{id}', 'GeneralController@updateFoto');
Route::put('/general/updateAboutFoto/{id}', 'GeneralController@updateAboutFoto');
Route::put('/general/updateProfileFoto/{id}', 'GeneralController@updateProfileFoto');

//portfolio
Route::put('/portfolio/update/{id}', 'PortfolioController@update');
Route::get('/portfolio/hapus/{id}', 'PortfolioController@delete');
Route::put('/portfolio/updatefoto/{id}', 'PortfolioController@updatefoto');
Route::post('/portfolio/store', 'PortfolioController@store');

//testimoni
Route::put('/testimoni/update/{id}', 'TestimoniController@update');
Route::get('/testimoni/hapus/{id}', 'TestimoniController@delete');
Route::post('/testimoni/store', 'TestimoniController@store');


//client
Route::put('/client/update/{id}', 'ClientController@update');
Route::get('/client/hapus/{id}', 'ClientController@delete');
Route::put('/client/updatefoto/{id}', 'ClientController@updatefoto');
Route::post('/client/store', 'ClientController@store');

//pilar
Route::put('/pilar/update/{id}', 'PilarController@update');
Route::get('/pilar/hapus/{id}', 'PilarController@delete');
Route::put('/pilar/updatefoto/{id}', 'PilarController@updatefoto');
Route::post('/pilar/store', 'PilarController@store');

//service
Route::put('/service/update/{id}', 'ServiceController@update');
Route::get('/service/hapus/{id}', 'ServiceController@delete');
Route::put('/service/updatefoto/{id}', 'ServiceController@updatefoto');
Route::post('/service/store', 'ServiceController@store');

//career
Route::put('/career/update/{id}', 'CareerController@update');
Route::get('/career/hapus/{id}', 'CareerController@delete');
Route::put('/career/updatefoto/{id}', 'CareerController@updatefoto');
Route::post('/career/store', 'CareerController@store');

//media 
Route::put('/media/update/{id}', 'MediaController@update');
Route::get('/media/hapus/{id}', 'MediaController@delete');
Route::post('/media/store', 'MediaController@store');
