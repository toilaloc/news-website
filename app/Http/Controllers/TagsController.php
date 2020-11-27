<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       
       $this->middleware('checkpermissions:quan-ly-tu-khoa,xoa-tu-khoa');
        
    }

    public function index()
    {
        $tags = Tags::all();
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $posts = Posts::whereHas('tags', function($query) use ($slug) {
            $query->whereSlug($slug);
          })->orderBy('id', 'DESC')->get();
        $tag = Tags::where('slug', $slug)->first();
        $dateTime  = Carbon::now('Asia/Ho_Chi_Minh');
        $hotPosts = Posts::take(5)->get();
        return view('frontend.pages.tags.index', compact('posts', 'tag', 'dateTime', 'hotPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletePost = Tags::find($id)->delete();
        if($deletePost) {
            return redirect()->route('tags.index')
            ->with('success','Đã xóa từ khóa');
        }
    }
}
