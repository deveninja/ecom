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
//     // return view('welcome');
//     return '<h2>Hello World</h2>';
// });

// Route::get('/', function () {
//     return view('pages.index');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/contact', function () {
//     return view('pages.contact');
// });

// Route::get('/portfolio', function () {
//     return view('pages.portfolio');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/contact', 'PagesController@contact');
Route::get('/products', 'PagesController@products');



Route::resource('posts', 'PostsController');
