<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       
       $this->middleware('checkpermissions:quan-ly-nguoi-dung,them-moi-nguoi-dung,sua-thong-tin-nguoi-dung,xoa-nguoi-dung');
        
    }
     
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
        $roles = Roles::all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:50|unique:users',
            'fullname' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'thumbnail',
            'address' => 'required',
            'phone' => 'required',
            'bio' => 'string',
            'gender' => 'required',
            'active',
            'vote',
            'status',
            'follower',
            'following',
        ],[
            'required' => ':attribute không được để trống.',
            'min' => ':attribute phải có ít nhất :min ký tự.',
            'email' => 'Không đúng định dạng',
        ]);

        if ($request->hasfile('thumbnail')) {
            $file = $request->file('thumbnail');
            $thumbnail = $file->getClientOriginalName();
            $file->move(public_path('uploads/users/'), $thumbnail);
        } else {
            $thumbnail = "default.png";
        }

        $user = new Users();
        $user->username = $request->username;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->thumbnail = $thumbnail;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->bio = $request->bio;
        $user->gender = $request->gender;
        $user->active = 0;
        $user->vote = 0;
        $user->status = 0;
        $user->follower = NULL;
        $user->following = NULL;
        $user->save();
        $user->Roles()->attach($request->role_id);

        return redirect()->route('users.index')->with('success', 'Thêm người dùng thành công');
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
        $roles =  Roles::all();
        return view('admin.users.edit', compact('user', 'roles'));
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
            'phone' => 'numeric|required|min:10',
            'gender' => 'required',
            'username',
            'password',
            'bio',
            'vote',
            'status',
            'follower',
            'following'
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

        $user->Roles()->sync($request->role_id);



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
       // $deleteUser->Roles()->detach($id);
        if($deleteUser) {
            return redirect()->route('users.index')
            ->with('success','Đã xóa người dùng');
        }
    }
}
