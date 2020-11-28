<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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



// GET SLUG WHEN POSTING
Route::get('get-post-slug', 'PostsController@getSlug')->name('posts.getslug');
Route::get('get-category-slug', 'CategoriesController@getSlug')->name('categories.getslug');
Route::get('loadFormReply', 'AjaxController@loadFormReply')->name('load.formReply');

// Route::get('loadFormReply', 'AjaxController@loadFormReply')->name('load.formReply');

// LOAD CATEGORY AJAX
Route::get('load-categories', 'CategoriesController@loadCategories')->name('load.categories');
Route::post('reporting', 'AjaxController@report')->name('reporting.store');
// SEARCHING
Route::post('search', 'SearchController@index')->name('search.index');

// ALL PANEL
Route::group(['prefix' => 'panel', 'middleware' => ['auth', 'checkroles']],  function () {
    Route::get('/', 'AdminController@index');
    Route::resource('posts', 'PostsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('tags', 'TagsController');
    Route::resource('users', 'UsersController');
    Route::resource('comments', 'CommentsController');
    Route::resource('roles', 'RolesController');
    Route::resource('permissions', 'PermissionsController');
    Route::resource('report', 'ReportControler');
});

// SHOW CONTENT
Route::get('/post/{slug}', 'PostsController@show');
Route::get('/category/{slug}', 'CategoriesController@show');
Route::get('/tag/{slug}', 'TagsController@show');

// VOTE STAR POST
Route::post('post_vote', 'PostsController@post_vote');


// PROFILE USER
Route::get('user/{username}', 'ProfileController@index');
Route::get('change-password/{username}', 'ProfileController@changePassword');
Route::get('author/{username}', 'ProfileController@activityAccount');
Route::match(['put', 'patch'], 'user/{username}', 'ProfileController@resolveChangeInfo')->name('userfront.update');
Route::match(['put', 'patch'],'change-password-profile/{username}','ProfileController@resolveChangePassword')->name('userfront.pass');
Route::resource('followers', 'FollowersController');

// SITEMAP
Route::get('/sitemap.xml', 'SitemapController@index')->name('sitemap.xml');
Route::get('/sitemap-post.xml', 'SitemapController@posts');
Route::get('/sitemap-category.xml', 'SitemapController@categories');
Route::get('/sitemap-tag.xml', 'SitemapController@tags');



Route::group(['prefix' => 'frontend'], function () {
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
});

Route::get('send-mail', function () {

    Mail::to('hoangxam2@gmail.com')->send(new \App\Mail\SendPassword());

    dd("Email is Sent.");
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
