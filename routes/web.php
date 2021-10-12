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

Route::get('/knitwear-manufacturer-and-exporter', function () {return view('pages.knitwear-manufacturer');});
Route::get('/woven-garments-manufacturer-and-exporter', function () {return view('pages.woven-garments');});

Route::redirect('/index.php','/');

Route::get('/','Pages\HomeController@home');
Route::get('/about','Pages\HomeController@about');
Route::get('/sewing','Pages\HomeController@sewing');
Route::get('/cutting','Pages\HomeController@cutting');
Route::get('/finishing','Pages\HomeController@finishing');
Route::get('/service','Pages\HomeController@service');
Route::get('/service-details','Pages\HomeController@service_details');
Route::get('/privacy_policy','Pages\HomeController@privacy_policy');
Route::get('/sitemap','Pages\HomeController@sitemap');

Route::get('/product','Pages\ProductController@product');

Route::get('/product-type/HI vis', function () {return redirect('https://dhakafareast.com/product-type/HI-vis');});
Route::get('/product-type/Sports and Active', function () {return redirect('https://dhakafareast.com/product-type/Sports-and-Active');});
Route::get('/product-type/Basic Wear', function () {return redirect('https://dhakafareast.com/product-type/Basic-Wear');});
Route::get('/product-type/Fancy Garments', function () {return redirect('https://dhakafareast.com/product-type/Fancy-Garments');});
Route::get('/product-type/Reguler wear', function () {return redirect('https://dhakafareast.com/product-type/Reguler-wear');});
Route::get('/product-type/Outer wear', function () {return redirect('https://dhakafareast.com/product-type/Outer-wear');});
Route::get('/product-type/Sports Wear', function () {return redirect('https://dhakafareast.com/product-type/Sports-Wear');});
Route::get('/product-type/Fleece items', function () {return redirect('https://dhakafareast.com/product-type/Fleece-items');});
Route::get('/product-type/Neck and Head', function () {return redirect('https://dhakafareast.com/product-type/Neck-and-Head');});
Route::get('/product-type/Under Garments', function () {return redirect('https://dhakafareast.com/product-type/Under-Garments');});

Route::get('/product-type/work-wear', function () {return redirect('https://dhakafareast.com/product-type/Workwear');});
Route::get('/product-details/hi-vis-javket', function () {return redirect('https://dhakafareast.com/product-details/hi-vis-jacket-6');});
Route::get('/product-type/{product_type}','Pages\ProductController@product_type')->name('product_type');
Route::get('/product-details/{slug}','Pages\ProductController@product_details')->name('product_details');

Route::get('/clients','Pages\HomeController@clients');
Route::get('/contact','Pages\HomeController@contact')->name('contact');
Route::get('/newsfeed','Pages\HomeController@blog')->name('newsfeed');
Route::get('/blog','Pages\HomeController@blog')->name('blog');
Route::get('/newsfeed/{slug}','Pages\HomeController@blog_details')->name('newsfeed_details');
Route::get('/blog/{slug}','Pages\HomeController@blog_details')->name('blog_details');
Route::get('/search-type','Pages\ProductController@search_by_type')->name('search_by_type');
Route::get('/product-by-type','Pages\ProductController@product_by_type')->name('product_by_type');

// Page not found
Route::get('pageNotFound', ['as' => 'notFound', 'uses' => 'Pages\HomeController@pageNotFound']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
