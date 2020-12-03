<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Posts;
use App\Models\Users;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index(){
        $currentUser = Auth::user()->id;
        $user = Users::all();
        $post = Posts::all();
        $comment = Comments::all();
        $myComment = Comments::where('user_id', $currentUser)->get();
        $report = Report::all();
        $myPosts = Posts::where('author_id', $currentUser)->get();
        $myReposts = Report::where('user_id', $currentUser)->get();
        $myPostApprovaling = Posts::where('author_id', $currentUser)->where('status','=',1)->get();
        return view('admin.index', compact(
            'user', 
            'post', 
            'comment', 
            'report',
            'myPosts',
            'myPostApprovaling',
            'myReposts',
            'myComment'
        ));
    }
}
