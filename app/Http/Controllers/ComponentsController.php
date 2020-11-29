<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Posts;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function showBreakingNews(){
        $breakingNews = Posts::all()->where('status', '<>', 1);;
        return view('frontend.components.breakingNews', compact('breakingNews'));
    }

    public function storeComment(Request $request)
    {
        $validateData = $request->validate([
            'content' => 'required|max:500',
            'comment_id',
            'date',
            'vote'
        ]);

        if (!empty($request->comment_id)) {
            $comment_id = $request->comment_id;
        } else {
            $comment_id = NULL;
        }

        if ($validateData) {
            $comment =  Comments::create([
                'post_id' => $request->post_id,
                'user_id' => $request->user_id,
                'content' => $request->content,
                'comment_id' => $comment_id,
                'date' => $request->date,
                'vote' => NULL
            ]);
            // dd($request->star);
            toast('Đã bình luận','success');
            return back();
        }
    }


}
