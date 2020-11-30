<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Carbon\Carbon;
class SearchController extends Controller
{
    public function index(Request $request){
      Carbon::setLocale('vi');
      $dateTime  = Carbon::now('Asia/Ho_Chi_Minh');
        $key = $request->get('key');
        $result = Posts::where('name', 'like', '%'.$key.'%')->where('status', '!=', 1)->orwhereHas('categories', function($query) use ($key) {
                $query->where('name', 'like', '%'.$key.'%')->where('status', '!=', 1);
              })->paginate(6);
              
      $hotPosts = Posts::where('view','>', 0)->take(5)->where('status', '<>', 1)->get();
      return view('frontend.search.searching', compact('result', 'key', 'dateTime', 'hotPosts'));
    }
}
