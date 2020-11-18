<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function showBreakingNews(){
        $breakingNews = Posts::all();
        return view('frontend.components.breakingNews', compact('breakingNews'));
    }

}
