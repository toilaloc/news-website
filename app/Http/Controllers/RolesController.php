<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       
       $this->middleware('checkpermissions:quan-ly-quyen,them-quyen-nguoi-dung,thay-quyen-nguoi-dung,xoa-quyen-nguoi-dung');
        
    }

    public function index()
    {
        $roles = Roles::all();
        $permissions = Permissions::all();
        return view('admin.roles.index', compact('roles','permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permissions::all();
        return view('admin.roles.create', compact('permissions'));
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
            'name' => 'required',
            'slug' => 'required',
        ]);


        $role = new Roles();
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->save();
        $role->Permissions()->attach($request->permission_id);

        return redirect()->route('roles.index')->with('success', 'Thêm quyền chi tiết người dùng thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Roles::find($id);
        $permissions = Permissions::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
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
        $role = Roles::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        $request->name !== $role->name ? $name = $request->name : $name = $role->name;
        $request->slug !== $role->slug ? $slug = $request->slug : $slug = $role->slug;

        $roles =   $role->update([
            'name'  => $name,
            'slug' => $slug,      
        ]);

        $role->Permissions()->sync($request->permission_id);

        if($roles){
            return redirect()->route('roles.index')->with('success', 'Cập nhật quyền thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteRoles =  Roles::find($id)->delete();
       // $deleteUser->Roles()->detach($id);
        if($deleteRoles) {
            return redirect()->route('roles.index')
            ->with('success','Đã xóa quyền người dùng');
        }
    }
}
