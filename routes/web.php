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


Route::get('panel', 'AdminController@index');
// View Admin
Route::resource('posts', 'PostsController');
Route::get('/post/{slug}', 'PostsController@show');
Route::resource('categories', 'CategoriesController');
Route::get('/category/{slug}', 'CategoriesController@show');
Route::resource('tags', 'TagsController');
Route::get('/tag/{slug}', 'TagsController@show');

Route::resource('users', 'UsersController');


// View Profile
Route::get('user/{username}', 'ProfileController@index');
Route::get('change-password/{username}', 'ProfileController@changePassword');
Route::get('author/{username}', 'ProfileController@activityAccount');
Route::match(['put', 'patch'], 'user/{username}', 'ProfileController@resolveChangeInfo')->name('userfront.update');
// Sitemap

Route::get('/sitemap.xml', 'SitemapController@index')->name('sitemap.xml');
Route::get('/sitemap-post.xml', 'SitemapController@posts');
Route::get('/sitemap-category.xml', 'SitemapController@categories');
Route::get('/sitemap-tag.xml', 'SitemapController@tags');

Route::resource('comments', 'CommentsController');

Route::resource('followers', 'FollowersController');

Route::group(['prefix' => 'frontend'], function () {

    Route::get('category', function () {
        return view('frontend.pages.categories.categoriesDisplay');
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

    Route::get('setting', function () {
        return view('frontend.pages.users_profile.setting');
    });
    Route::get('follow', function () {
        return view('frontend.pages.users_profile.follow');
    });
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
