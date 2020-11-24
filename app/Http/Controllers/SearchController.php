<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Carbon\Carbon;
class SearchController extends Controller
{
    public function index(Request $request){
        $dateTime  = Carbon::now('Asia/Ho_Chi_Minh');
        $key = $request->get('key');
        $result = Posts::where('name', 'like', '%'.$key.'%')->orwhereHas('categories', function($query) use ($key) {
                $query->where('name', 'like', '%'.$key.'%');
              })->get();
        $hotPosts = Posts::where('view','>','0')->take(5)->get();
      return view('frontend.search.searching', compact('result', 'key', 'dateTime', 'hotPosts'));
    }
}
