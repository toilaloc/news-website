<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       
       $this->middleware('checkpermissions:quan-ly-quyen-chi-tiet,them-quyen-chi-tiet,thay-quyen-chi-tiet,xoa-quyen-chi-tiet');
        
    }

    public function index()
    {
        $permissions = Permissions::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permissions.create');
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


        $permissions = new Permissions();
        $permissions->name = $request->name;
        $permissions->slug = $request->slug;
        $permissions->save();

        return redirect()->route('permissions.index')->with('success', 'Thêm quyền người dùng chi tiết thành công');
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
        $permission = Permissions::find($id);
        return view('admin.permissions.edit', compact('permission'));
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
        $permission = Permissions::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        $request->name !== $permission->name ? $name = $request->name : $name = $permission->name;
        $request->slug !== $permission->slug ? $slug = $request->slug : $slug = $permission->slug;

        $permissions =  $permission->update([
            'name'  => $name,
            'slug' => $slug,      
        ]);

        if($permissions){
            return redirect()->route('permissions.index')->with('success', 'Cập nhật quyền chi tiết thành công');
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
        $deletePermissions =  Permissions::find($id)->delete();
       // $deleteUser->Roles()->detach($id);
        if($deletePermissions) {
            return redirect()->route('permissions.index')
            ->with('success','Đã xóa quyền người dùng');
        }
    }
}
