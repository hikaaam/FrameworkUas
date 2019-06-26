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

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/header', function () {
    return view('header');
});


Route::get('/coba', function () {
    return view('coba');
});

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('pages/home');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/post', function () {
    return view('post');
});
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::get('/search', function () {
    return view('search');
});
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin-vg', function () {
    return view('backend/index');
});
Route::get('/admin-vg/galery', function () {
    return view('backend/gallery');
});

Route::get('/admin-vg/add-article', function () {
    return view('backend/blank');
});
Route::get('/admin-vg/chart', function () {
    return view('backend/chartjs');
});
Route::get('/admin-vg/lock', function () {
    return view('backend/lock_screen');
});
Route::get('/admin-vg/edit', function () {
    return view('backend/edit');
});
Route::get('/admin-vg-login', function () {
    return view('backend/login');
});
Route::get('/blog-create', function () {
    return view('createblog');
});
Route::get('/welvome', function () {
    return view('welcome');
});
Route::get('blog-create','BlogsController@view');
Route::post('blogcreate','BlogsController@kirim');
Route::get('user','UserController@view');
Route::post('kirim','UserController@kirim');

