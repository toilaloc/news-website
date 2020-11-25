<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($username){

        $user = Users::where('username', $username)->first();
        if($user){
            if(Auth::user()){
                if(Auth::user()->username === $user->username){
                    return view('frontend.pages.users_profile.profile', compact('user'));
                }else {
                    return view('frontend.pages.errors.404');
                }
            }else {
                return view('frontend.pages.errors.404');
            }         
        }else {
            return view('frontend.pages.errors.404');
        }   
    }
    public function changePassword($username){

        $user = Users::where('username', $username)->first();
        if($user){
            if(Auth::user()){
                if(Auth::user()->username === $user->username){
                    return view('frontend.pages.users_profile.change-password', compact('user'));
                }else {
                    return view('frontend.pages.errors.404');
                }
            }else {
                return view('frontend.pages.errors.404');
            }
                        
        }else {
            return view('frontend.pages.errors.404');
        }
    }
    public function activityAccount($username){
        $user = Users::where('username', $username)->first();
        if($user){
            return view('frontend.pages.users_profile.activity-history', compact('user'));
        }
        else{
            return view('frontend.pages.errors.404');
        }
        
    }

    public function resolveChangeInfo(Request $request, $username){

        $info = Users::where('username', $username)->first();

        // get infor 
        $currentUserId = $info->id;
        $username = $info->username;
        $password = $info->password;
        $oldThumbnail = $info->thumbnail;
        $follower = $info->follower;
        $following = $info->following;
        $vote = $info->vote;
        $active = $info->active;
        $status = $info->status;

        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'thumbnail',
            'address' => 'required',
            'phone' => 'numeric|required|max:10',
            'gender' => 'required'
        ]);

        if(Auth::user()){
            if($currentUserId === Auth::user()->id){   
                if ($request->hasFile('thumbnail')) {
                    $thumbnail = $request->thumbnail->getClientOriginalName();
                        if($thumbnail == $oldThumbnail){
                             $thumbnail = $oldThumbnail;
                        }else {
                            $request->file('thumbnail')->move(public_path('uploads/users'), $request->file('thumbnail')->getClientOriginalName());
                        }
                }else {
                    $thumbnail = $oldThumbnail;
            }

       $newInfo =  $info->update([
            'username'  => $username,
            'fullname' => $request->fullname,
            'password' => $password,
            'email' => $request->email,
            'address' => $request->address,
            'bio' => $request->bio,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'active' => $active,
            'vote' => $vote,
            'status' => $status,
            'follower' => $follower,
            'following' => $following,
            'thumbnail' => $thumbnail,
        ]);

       // dd($newInfo);

            return back()->with('success', 'Sửa thông tin thành viên thành công.');
        }else {
            return back()->with('danger', 'Bạn không có quyền đổi thông tin.');;
        }

    }

}
        // dd($info, $request);


    public function resolveChangePassword(Request $request, $username){

        $password = Users::where('username', $username)->first();

    }
}
