<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user =  Users::find($id);
        return view('admin.users.edit', compact('user'));
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
        // get current user
        $user = Users::findOrFail($id);

        // get infor 
        $username = $user->username;
        $password = $user->password;
        $oldThumbnail = $user->thumbnail;
        $follower = $user->follower;
        $following = $user->following;
        $vote = $user->vote;

       
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'thumbnail',
            'address' => 'required',
            'phone' => 'numeric|required|min:10|max:10',
            'gender' => 'required'
        ],[
            'required' => ':attribute không được để trống',
            'email' => 'Email không đúng định dạng',
            'numeric' => ':attribute Phải là số',
            'min' => ':attribute phải là 10 số',
            'max' => ':attribute không được quá 10 số',
        ]);
    
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

        $user->update([
            'username'  => $username,
            'fullname' => $request->fullname,
            'password' => $password,
            'email' => $request->email,
            'address' => $request->address,
            'bio' => $request->bio,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'active' => $request->active,
            'vote' => $vote,
            'status' => $request->status,
            'follower' => $follower,
            'following' => $following,
            'thumbnail' => $thumbnail,
        ]);

            return back()->with('success', 'Sửa thông tin thành viên thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteUser =  Users::find($id)->delete();
        if($deleteUser) {
            return redirect()->route('users.index')
            ->with('success','Đã xóa người dùng');
        }
    }
}
