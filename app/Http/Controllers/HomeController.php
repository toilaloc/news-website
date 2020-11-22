<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
      // $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get categories xã hội
        
        $breakingNewsLeft = Categories::find(6);
        $slugLeft = $breakingNewsLeft->slug;
        $breakingNewsLeft = Posts::whereHas('categories', function($query) use ($slugLeft) {
            $query->whereSlug($slugLeft);
          })->orderBy('id', 'DESC')->get();

        $breakingNewsCenter = Categories::find(7);
        $slugCenter = $breakingNewsCenter->slug;
        $breakingNewsCenter = Posts::whereHas('categories', function($query) use ($slugCenter) {
            $query->whereSlug($slugCenter);
          })->orderBy('id', 'DESC')->get();

          $breakingNewsRight = Categories::find(8);
          $slugRight = $breakingNewsRight->slug;
          $breakingNewsRight = Posts::whereHas('categories', function($query) use ($slugRight) {
              $query->whereSlug($slugRight);
        })->orderBy('id', 'DESC')->get();


        // Get all Post tin thể thao
        $idTinTheThao = 1;
        $tinTheThao = Categories::find($idTinTheThao);
        $getAllSubCate = $tinTheThao->childs;

        // get all post tin giải trí
        $idTinGiaiTri = 4;
        $tinGiaiTri = Categories::find($idTinGiaiTri);
        $getSubTinGiaiTri = $tinGiaiTri->childs;

        $dateTime  = Carbon::now('Asia/Ho_Chi_Minh');
        $tinTongHop = Posts::all()->random(6);
        return view('frontend.index', compact('breakingNewsLeft', 'breakingNewsCenter', 'breakingNewsRight', 'getAllSubCate', 'getSubTinGiaiTri', 'tinTongHop', 'dateTime'));
    }
}
