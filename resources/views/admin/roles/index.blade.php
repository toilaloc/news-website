@extends('admin.layouts.index')

@section('content')

@if(session()->get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session()->get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh Sách Người Dùng</h6>
    </div>
    <div class="card-body">
    <table id="tableUser" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">Quyền</th>
        <th scope="col">Quyền không dấu</th>
        <th scope="col">Mô tả quyền</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xóa</th>
      </tr>
    </thead>
    <tbody>
        @foreach($roles as $role)
        <tr>
        <td>{{$role->name}}</td>
        <td>{{$role->slug}}</td>

        <td> 
            @foreach($role->Permissions as $permission)
            <span class="badge badge-success">{{$permission->name}}</span>
            @endforeach
        </td>
      <td><a class="btn btn-success btn-sm" href="{{route('roles.edit', $role->id)}}">Sửa</a></td>
        <td>
          <form action="{{route('roles.destroy',$role->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Xóa</button></td>
        </form>
        </tr>
        
          @endforeach
    </tbody>
  </table>
    </div>
</div>

@endsection