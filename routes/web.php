<?php

use Illuminate\Support\Facades\Route;

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


// Get Slug
Route::get('get-post-slug', 'PostsController@getSlug')->name('posts.getslug');
Route::get('get-category-slug', 'CategoriesController@getSlug')->name('categories.getslug');


// Load Category
Route::get('load-categories', 'CategoriesController@loadCategories')->name('load.categories');

Route::get('testadmin', function(){
    return view('admin.index');
});


// View Admin
Route::resource('posts', 'PostsController');
Route::resource('categories', 'CategoriesController');

Route::group(['prefix' => 'frontend'], function () {

    // Main Pages
    Route::get('index', function(){
        return view('frontend.index');
    });
    Route::get('post', function(){
        return view('frontend.pages.posts.postDisplay');
    });
    Route::get('category', function(){
        return view('frontend.pages.categories.categoriesDisplay');
    });

    // Account
    Route::get('login', function(){
        return view('frontend.pages.account.login');
    });
    Route::get('register', function(){
        return view('frontend.pages.account.register');
    });
    Route::get('forget', function(){
        return view('frontend.pages.account.forget');
    });

    // Error
    Route::get('error', function(){
        return view('frontend.pages.errors.404');
    });

    // Contact
    Route::get('about', function(){
        return view('frontend.pages.contact.about');
    });
    Route::get('contact', function(){
        return view('frontend.pages.contact.contact');
    });
    Route::get('faq', function(){
        return view('frontend.pages.contact.faq');
    });
    Route::get('term', function(){
        return view('frontend.pages.contact.term');
    });

    // Profile
    Route::get('profile', function(){
        return view('frontend.pages.users_profile.profile');
    });
    Route::get('address', function(){
        return view('frontend.pages.users_profile.address');
    });
    Route::get('setting', function(){
        return view('frontend.pages.users_profile.setting');
    });
    Route::get('change-password', function(){
        return view('frontend.pages.users_profile.change-password');
    });
    Route::get('activity', function(){
        return view('frontend.pages.users_profile.activity-history');
    });
    Route::get('follow', function(){
        return view('frontend.pages.users_profile.follow');
    });
});
// sitemap
    Route::get('/sitemap.xml', 'SitemapController@index');
    Route::get('/sitemap.xml/post', 'SitemapController@post');
    Route::get('/sitemap.xml/categories', 'SitemapController@categories');
