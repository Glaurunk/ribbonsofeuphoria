<?php
use App\Http\Controllers\PagesController;

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
Route::get('/', 'PagesController@home');
Route::get('/policy', 'PagesController@policy');
Route::get('/bio', 'PagesController@bio');
Route::get('/music', 'PagesController@music');
Route::get('/shop', 'PagesController@shop');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
