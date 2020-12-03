@extends('admin.layouts.index')
@section('title', "Thêm người dùng mới")
@section('content')
<div class="col-lg-12 mb-12 sm-12">
  @if($errors->any())
  <div class="alert alert-danger" role="alert">
     <ul>
         @foreach($errors->all() as $error)
         <li>{{$error}}</li>
         @endforeach
     </ul> 
  </div>
  @endif
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
        <h6 class="m-0 font-weight-bold text-primary">Thêm mới người dùng</h6>
      </div>
      <div class="card-body">
        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Tên người dùng</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="Tên người dùng">
              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Mật khẩu</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                </div>
              </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Họ và tên</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="fullname" placeholder="Họ và tên">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Ảnh đại diện</label>
                <div class="col-sm-10">
                  <input id="thumbnail" type="file" class="form-control" name="thumbnail" autofocus>         
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="email" placeholder="Địa chỉ email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Giới tính</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input"  type="radio" name="gender" value="0">
                        <label class="form-check-label">Nam</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input"  type="radio" name="gender"value="1">
                        <label class="form-check-label">Nữ</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender">
                        <label class="form-check-label">Khác</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="address" placeholder="Địa chỉ">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Giới thiệu</label>
                <div class="col-sm-10">
                <textarea class="form-control" name="bio" cols="30" rows="3" placeholder="Giới thiệu bản thân"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Quyền người dùng</label>
                <div class="col-sm-10">
                    <select name="role_id[]" class="form-control">
                    @foreach($roles as $role)  
                    <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Thêm người dùng</button>
              </div>
            </div>
          </form>
      </div>
    </div>
</div>
@endsection