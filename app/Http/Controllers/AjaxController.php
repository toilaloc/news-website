<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function loadFormReply(Request $request){
        $formReply =  view('frontend.pages.comments.formReply')->render();
        return response()->json(['formReply'=>$formReply]);   
    }
}
