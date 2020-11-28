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

        // Sẽ viết lại vì vi phạm DRY

        $dateTime  = Carbon::now('Asia/Ho_Chi_Minh');
        // Tin nóng bên trái
        $breakingNewsLeft = Categories::find(6);
        $slugLeft = $breakingNewsLeft->slug;
        $breakingNewsLeft = Posts::whereHas('categories', function($query) use ($slugLeft) {
            $query->whereSlug($slugLeft)->where('status', '<>', 1);
          })->orderBy('id', 'DESC')->get();

        // Tin nóng ở giữa
        $breakingNewsCenter = Categories::find(7);
        $slugCenter = $breakingNewsCenter->slug;
        $breakingNewsCenter = Posts::whereHas('categories', function($query) use ($slugCenter) {
            $query->whereSlug($slugCenter)->where('status', '<>', 1);;
          })->orderBy('id', 'DESC')->get();

        // Tin nóng bên phải
          $breakingNewsRight = Categories::find(8);
          $slugRight = $breakingNewsRight->slug;
          $breakingNewsRight = Posts::whereHas('categories', function($query) use ($slugRight) {
              $query->whereSlug($slugRight)->where('status', '<>', 1);;
        })->orderBy('id', 'DESC')->get();


        // Get all Post tin thể thao
        $idTinTheThao = 1;
        $tinTheThao = Categories::find($idTinTheThao);
        $getAllSubCate = $tinTheThao->childs;

        // get all post tin giải trí
        $idTinGiaiTri = 4;
        $tinGiaiTri = Categories::find($idTinGiaiTri);
        $getSubTinGiaiTri = $tinGiaiTri->childs;
        $tinTongHop = Posts::all()->random(6)->where('status', '<>', 1);


        // ****  Xuất Bản   **** //
        $idXuatBan = 14;
        $tinXuatBan = Categories::find($idXuatBan);
        $slugTXB = $tinXuatBan->slug;
        // Get bài viết đầu tiên của tin xuất bản
        $firstXuatBan =  Posts::whereHas('categories', function($query) use ($slugTXB) {
          $query->whereSlug($slugTXB)->where('status', '<>', 1);;
        })->orderBy('id', 'DESC')->first();

        // Get 4 bài viết, bỏ qua bài viết đầu tiên
        $lastXuatBan =  Posts::whereHas('categories', function($query) use ($slugTXB) {
          $query->whereSlug($slugTXB)->where('status', '<>', 1);;
        })->skip(1)->take(3)->orderBy('id', 'DESC')->get();


        // ****  Sách Hay   **** //
        $idSachHay = 16;
        $tinSachHay = Categories::find($idSachHay);
        $slugTSH = $tinSachHay->slug;
        // Get bài viết đầu tiên của tin xuất bản
        $firstSachHay =  Posts::whereHas('categories', function($query) use ($slugTSH) {
          $query->whereSlug($slugTSH)->where('status', '<>', 1);;
        })->orderBy('id', 'DESC')->first();

        // Get 4 bài viết, bỏ qua bài viết đầu tiên
        $lastSachHay =  Posts::whereHas('categories', function($query) use ($slugTSH) {
          $query->whereSlug($slugTSH)->where('status', '<>', 1);;
        })->skip(1)->take(3)->orderBy('id', 'DESC')->get();

       
        // ****  Tác Giả   **** //
        $idTacGia = 13;
        $tinTacGia = Categories::find($idTacGia);
        $slugTTaG = $tinTacGia->slug;
        // Get bài viết đầu tiên của tin xuất bản
        $firstTacGia =  Posts::whereHas('categories', function($query) use ($slugTTaG) {
          $query->whereSlug($slugTTaG)->where('status', '<>', 1);;
        })->orderBy('id', 'DESC')->first();

        // Get 4 bài viết, bỏ qua bài viết đầu tiên
        $lastTacGia =  Posts::whereHas('categories', function($query) use ($slugTTaG) {
          $query->whereSlug($slugTTaG)->where('status', '<>', 1);;
        })->skip(1)->take(3)->orderBy('id', 'DESC')->get();

        // ****  Thế Giới   **** //
        $idTheGioi = 15;
        $tinTheGioi = Categories::find($idTheGioi);
        $slugTTG = $tinTheGioi->slug;
        // Get bài viết đầu tiên của tin xuất bản
        $firstTheGioi =  Posts::whereHas('categories', function($query) use ($slugTTG) {
          $query->whereSlug($slugTTG)->where('status', '<>', 1);;
        })->orderBy('id', 'DESC')->first();

        // Get 4 bài viết, bỏ qua bài viết đầu tiên
        $lastTheGioi =  Posts::whereHas('categories', function($query) use ($slugTTG) {
          $query->whereSlug($slugTTG)->where('status', '<>', 1);;
        })->skip(1)->take(3)->orderBy('id', 'DESC')->get();

        $hotPosts = Posts::where('view','>','0')->take(5)->get();
        return view('frontend.index', compact(
          'breakingNewsLeft', 
          'breakingNewsCenter', 
          'breakingNewsRight', 
          'getAllSubCate', 
          'getSubTinGiaiTri', 
          'tinTongHop', 
          'dateTime',
          'firstXuatBan',
          'lastXuatBan',
          'firstSachHay',
          'lastSachHay',
          'firstTacGia',
          'lastTacGia',
          'firstTheGioi',
          'lastTheGioi',
          'hotPosts'
        ));
    }
}
