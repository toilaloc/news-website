<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Posts;
use App\Models\Users;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $user = Users::all();
        $post = Posts::all();
        $comment = Comments::all();
        $report = 10;
        return view('admin.index', compact('user', 'post', 'comment', 'report'));
    }
}
