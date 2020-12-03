<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    public function index($username){

        $user = Users::where('username', $username)->first();
        if($user){
            if(Auth::user()){
                if(Auth::user()->username === $user->username){
                    return view('frontend.pages.users_profile.profile', compact('user'));
                }else {
                    return view('errors.404');
                }
            }else {
                return view('errors.404');
            }         
        }else {
            return view('errors.404');
        }   
    }
    public function changePassword($username){

        $user = Users::where('username', $username)->first();
        if($user){
            if(Auth::user()){
                if(Auth::user()->username === $user->username){
                    return view('frontend.pages.users_profile.change-password', compact('user'));
                }else {
                    return view('errors.404');
                }
            }else {
                return view('errors.404');
            }

        }else {
            return view('errors.404');
        }
    }
    public function activityAccount($username){
       
        Carbon::setLocale('vi');
        $dateTime  = Carbon::now('Asia/Ho_Chi_Minh');
        $user = Users::where('username', $username)->first();
        $posts = $user->hasPosts;
        $comments = $user->hasComments;
        if($user){
            return view('frontend.pages.users_profile.activity-history', compact('user', 'dateTime','posts','comments'));
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
            'phone' => 'numeric|required',
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


        if($newInfo){
            toast('Đổi thông tin thành công','success');
            return back();
        }else {
            toast('Đổi không thành công','error');
            return back();
        }

    }
}

}
        // dd($info, $request);


    public function resolveChangePassword(Request $request, $username){

        $password = Users::where('username', $username)->first();

        $request->validate([
            'password' => 'required|min:8',
        ]);

        $Oldpassword = $password->password;
        $newPassword = $request->password;
        $address = $password->address;
        $email = $password->email;
        $bio = $password->bio;
        $phone = $password->phone;
        $gender = $password->gender;
        $username = $password->username;
        $fullname = $password->fullname;
        $oldThumbnail = $password->thumbnail;
        $follower = $password->follower;
        $following = $password->following;
        $vote = $password->vote;
        $active = $password->active;
        $status = $password->status;

        if(Hash::check($request->currentPassword, $Oldpassword)){
            if($request->password == $request->confirmNewPassword){

                 $password->update([
                    'username'  => $username,
                    'fullname' => $fullname,
                    'email' => $email,
                    'address' => $address,
                    'bio' => $bio,
                    'gender' => $gender,
                    'phone' => $phone,
                    'active' => $active,
                    'vote' => $vote,
                    'status' => $status,
                    'follower' => $follower,
                    'following' => $following,
                    'thumbnail' => $oldThumbnail,
                    'password' => Hash::make($newPassword)
                ]);



                    return back()->with('success', 'Đổi mật khẩu thành công');

            }else{
                return back()->with('danger', 'Mật khẩu mới không khớp nhau');
            }
        }else{
            return back()->with('danger', 'Mật khẩu cũ không đúng');
        }

    }
}
