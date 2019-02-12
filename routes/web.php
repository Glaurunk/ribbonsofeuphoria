<?php
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\EventsController;


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
//PAGES
Route::get('/', 'PagesController@home')->name('home');
Route::get('/policy', 'PagesController@policy');
Route::get('/bio', 'PagesController@bio');
Route::get('/music', 'PagesController@music');
Route::get('/shop', 'PagesController@shop');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');
Route::get('/logout', 'PagesController@logout');

//ADMIN
Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
Route::get('/admin/events', 'AdminController@events');
Route::get('/admin/posts', 'AdminController@posts');

// SUBSCRIBE!
Route::resource('subscriptions', 'SubscriptionController');
Route::get('/subscription/verify/{token}', 'SubscriptionController@verifySubscription');
Route::post('/known_subscriptions', 'SubscriptionController@knownSubscription');

//POSTS
Route::resource('posts', 'PostsController');

//EVENTS
Route::resource('events', 'EventsController');

//PHOTOS
Route::resource('photos', 'PhotosController');

//CATEGORIES
Route::get('/Opinions', 'CategoriesController@Opinions');
Route::get('/Insider', 'CategoriesController@Insider');
Route::get('/Press', 'CategoriesController@Press');
Route::get('/Etcetera', 'CategoriesController@Etcetera');

//Authentication - Verification
//Auth::routes(['verify' => true]);
Auth::routes(['register' => false]);
