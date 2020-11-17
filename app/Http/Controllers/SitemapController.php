<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Categories;
class SitemapController extends Controller
{
    public function index()
    {
        $post = Post::all()->first();

        return response()->view('sitemap.index', [
            'post' => $post,
            'categories' => $categories
        ])->header('Content-Type', 'text/xml');
    }
    public function post()
    {
        $post = Posts::latest()->get();
        return response()->view('sitemap.post', [
            'post' => $post,
        ])->header('Content-Type', 'text/xml');
    }
    public function Categories()
    {
        $categories = Categories::latest()->get();
        return response()->view('sitemap.categories', [
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }
}
