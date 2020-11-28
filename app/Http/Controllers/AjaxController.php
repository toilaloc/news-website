<?php

namespace App\Http\Controllers;

use App\Events\UserReports;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AjaxController extends Controller
{
    public function loadFormReply(Request $request){
        $formReply =  view('frontend.pages.comments.formReply')->render();
        return response()->json(['formReply'=>$formReply]);   
    }

    public function report(Request $request){
        $validateData = $request->validate([
            'user_id',
            'author_id',
            'reason' => 'required',
            'post_id',
            'comment_id',
            'type'
        ]);

        if($request->user_id){
            $userId = $request->user_id;
        }else{
            $userId = NULL;
        }

        if($request->post_id){
            $postId = $request->post_id;
        }else{
            $postId = NULL;
        }

        if($request->comment_id){
            $commentId = $request->comment_id;
        }else{
            $commentId = NULL;
        }

       if($validateData) {
         $result =  Report::create([
            'user_id' => $userId,
            'reporter_id' => Auth::user()->id,
            'post_id' => $postId,
            'reason' => $request->reason,
            'comment_id' => $commentId,
            'type' => $request->type,
           ]);

          

           $getReport = Report::find($result);

           event(new UserReports($getReport));
           
           if($result){
            toast('Báo cáo thành công','success','top-right');
            return back();
           // return back()->with('success','Báo cáo thành công')->toToast();  
           }else {
            toast('Báo cáo không thành công','danger','top-right');
            return back();  
           }

        }
        
    }
}
