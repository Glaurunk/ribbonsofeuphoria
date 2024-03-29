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
// New Shop Routes
Route::get('/shop-new', 'PagesController@shop_new')->name('shop');
Route::get('/cart', 'PagesController@cart')->name('cart');
Route::get('/checkout', 'PagesController@checkout')->name('checkout');

//ADMIN
Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
Route::get('/admin/events', 'AdminController@events');
Route::get('/admin/posts', 'AdminController@posts');
Route::get('admin/map', 'AdminController@mapper');
Route::post('admin/map', 'AdminController@setToMap');

//CAROUSEL
Route::get('/admin/gallery', 'AdminController@gallery');
Route::post('/addtocarousel', 'AdminController@addToCarousel');
Route::post('/removefromcarousel', 'AdminController@removeFromCarousel');

// SUBSCRIBE
Route::resource('subscriptions', 'SubscriptionController');
Route::get('/subscription/verify/{token}', 'SubscriptionController@verifySubscription');
Route::post('/known_subscriptions', 'SubscriptionController@knownSubscription');

//POSTS
Route::resource('posts', 'PostsController');

//EVENTS
Route::resource('events', 'EventsController');

//PHOTOS
Route::resource('photos', 'PhotoController');

//PLACES
Route::resource('places', 'PlaceController');

//CATEGORIES
Route::get('/Opinions', 'CategoriesController@Opinions');
Route::get('/Insider', 'CategoriesController@Insider');
Route::get('/Press', 'CategoriesController@Press');
Route::get('/Etcetera', 'CategoriesController@Etcetera');

//Authentication - Verification
Auth::routes();
//Auth::routes(['register' => false]);
