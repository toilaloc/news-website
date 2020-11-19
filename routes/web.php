<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



// Get Slug
Route::get('get-post-slug', 'PostsController@getSlug')->name('posts.getslug');
Route::get('get-category-slug', 'CategoriesController@getSlug')->name('categories.getslug');
Route::get('loadFormReply', 'AjaxController@loadFormReply')->name('load.formReply');

// Load Category
Route::get('load-categories', 'CategoriesController@loadCategories')->name('load.categories');

Route::get('testadmin', function () {
    return view('admin.index');
});


// View Admin
Route::resource('posts', 'PostsController');
Route::get('/post/{slug}', 'PostsController@show');
Route::resource('categories', 'CategoriesController');
Route::resource('tags', 'TagsController');
Route::get('/tag/{slug}', 'TagsController@show');
Route::resource('users', 'UsersController');

// Sitemap

Route::get('/sitemap.xml', 'SitemapController@index')->name('sitemap.xml');
  Route::get('/sitemap-post.xml', 'SitemapController@posts');
  Route::get('/sitemap-category.xml', 'SitemapController@categories');
  Route::get('/sitemap-tag.xml', 'SitemapController@tags');

Route::resource('comments', 'CommentsController');

Route::group(['prefix' => 'frontend'], function () {

    // Main Pages
    Route::get('index', function(){
        return view('frontend.index');
    });
    Route::get('post', function () {
        return view('frontend.pages.posts.postDisplay');
    });
    Route::get('category', function () {
        return view('frontend.pages.categories.categoriesDisplay');
    });

    // Account
    Route::get('login-front', function(){
        return view('frontend.pages.account.login');
    });
    Route::get('register', function () {
        return view('frontend.pages.account.register');
    });
    Route::get('forget', function () {
        return view('frontend.pages.account.forget');
    });

    // Error
    Route::get('error', function () {
        return view('frontend.pages.errors.404');
    });

    // Contact
    Route::get('about', function () {
        return view('frontend.pages.contact.about');
    });
    Route::get('contact', function () {
        return view('frontend.pages.contact.contact');
    });
    Route::get('faq', function () {
        return view('frontend.pages.contact.faq');
    });
    Route::get('term', function () {
        return view('frontend.pages.contact.term');
    });

    // Profile
    Route::get('profile', function () {
        return view('frontend.pages.users_profile.profile');
    });
    Route::get('address', function () {
        return view('frontend.pages.users_profile.address');
    });
    Route::get('setting', function () {
        return view('frontend.pages.users_profile.setting');
    });
    Route::get('change-password', function () {
        return view('frontend.pages.users_profile.change-password');
    });
    Route::get('activity', function () {
        return view('frontend.pages.users_profile.activity-history');
    });
    Route::get('follow', function () {
        return view('frontend.pages.users_profile.follow');
    });
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

