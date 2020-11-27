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
        <th scope="col">Tên người dùng</th>
        <th scope="col">Ảnh dại diện</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Giới tính</th>
        <th scope="col">Email</th>
        <th scope="col">Người theo dõi</th>
        <th scope="col">Đang theo dõi</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Vai trò</th>
        <th scope="col">Số bài viết</th>
        <th scope="col">Ngày đăng ký</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xóa</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
        <td><a href="{{url('/author', $user->username)}}">{{$user->fullname}}</a></td>
        <td> <img class="rounded-circle" src="{{url('uploads/users/', $user->thumbnail)}}" alt="{{$user->fullname}}" height="50px" width="50px"></td>
        <td>{{$user->address}}</td>
        <td>@if($user->gender == 0)
                {{"Nam"}}
                @elseif($user->gender == 1) 
                {{"Nữ"}}
                @else 
                {{"Không xác định"}}
                @endif
        </td>
        <td>{{$user->email}}</td>
        <td>{{$user->hasFollowers->count()}}</td>
        <td>{{$user->Following->count()}}</td>
        <td>
            @if($user->status == 0)
            {{"Chưa xác thực"}}
            @else 
            {{"Đã xác thực"}}
            @endif
        </td>
      <td>
      @foreach($user->Roles as $role)
        {{$role->name}}
      @endforeach
      </td>
      <td>{{$user->hasPosts->count()}}</td>
        <td>{{$user->created_at}}</td>
      <td><a class="btn btn-success btn-sm" href="{{route('users.edit', $user->id)}}">Sửa</a></td>
        <td>
          <form action="{{route('users.destroy',$user->id)}}" method="POST">
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