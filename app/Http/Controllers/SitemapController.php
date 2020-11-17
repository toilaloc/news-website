<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use App\Models\Tags;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index() {

        $posts = Posts::all()->first();
        $categories = Categories::all()->first();
        $tags = Tags::all()->first();

        return response()->view('frontend.sitemap.index', [
            'posts' => $posts,
            'category' => $categories,
            'tags' => $tags,
        ])->header('Content-Type', 'text/xml');
      }
  
      public function posts() {
         $posts = Posts::latest()->get();
         return response()->view('frontend.sitemap.post', [
             'posts' => $posts,
         ])->header('Content-Type', 'text/xml');
     }
  
     public function categories() {
         $categories = Categories::all();
         return response()->view('frontend.sitemap.category', [
             'categories' => $categories,
         ])->header('Content-Type', 'text/xml');
     }
     
     public function tags() {
         $tags = Tags::all();
         return response()->view('frontend.sitemap.tag', [
             'tags' => $tags,
         ])->header('Content-Type', 'text/xml');
     }
}
