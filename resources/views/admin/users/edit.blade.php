@extends('admin.layouts.index')

@section('content')
<div class="col-lg-12 mb-12 sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session()->get('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
       <ul>
           @foreach($errors->all() as $error)
           <li>{{$error}}</li>
           @endforeach
       </ul> 
    </div>
    @endif
  <div class="card shadow mb-4">
      <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">EDIT USER: {{$user->fullname}}</h6>
      </div>
      <div class="card-body">
        <form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">FullName</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="fullname"   value="{{$user->fullname}}">
              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="email" value="{{$user->email}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ</label>
               <div class="col-sm-10 mb-2">
               <input class="form-control" name="address" value="{{$user->address}}"/>
              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Giới thiệu cá nhân:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="Description" name="bio"  row="3">{{$user->bio}}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Giới tính</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="0"
                        @if($user->gender == 0)
                        {{"checked"}}
                        @endif
                        >
                        <label class="form-check-label" >Nam</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="1"
                        @if($user->gender == 1)
                        {{"checked"}}
                        @endif
                        >
                        <label class="form-check-label">Nữ</label>
                      </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Trạng thái tài khoản</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="active" id="inlineRadio1" value="0"
                        @if($user->active == 0)
                        {{"checked"}}
                        @endif
                        >
                        <label class="form-check-label" for="inlineRadio1">Đã kích hoạt</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="active" id="inlineRadio2" value="1"
                        @if($user->active == 1)
                        {{"checked"}}
                        @endif
                        >
                        <label class="form-check-label" for="inlineRadio2">Vô hiệu hóa</label>
                      </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="0"
                        @if($user->status == 0)
                        {{"checked"}}
                        @endif
                        >
                        <label class="form-check-label" for="inlineRadio1">Công khai</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="1"
                        @if($user->status == 1)
                        {{"checked"}}
                        @endif
                        >
                        <label class="form-check-label" for="inlineRadio2">Riêng tư</label>
                      </div>
                </div>
              </div>
            
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Ảnh đại diện</label>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-1">
                        <img id="showThumb" src="{{url('uploads/users', $user->thumbnail)}}" height="60px" width="60px" />
                        </div>
                        <div class="col-sm-11"> 
                            <div class="custom-file">
                                <input type="file" id="thumb" name="thumbnail" class="form-control pb-5 pt-3" id="exampleFormControlFile1">
                            </div>
                        </div>
                    </div>
                   
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Quyền người dùng</label>
                <div class="col-sm-10">
                    <select name="role_id[]" class="form-control">
                    @foreach($roles as $role)  
                    <option value="{{$role->id}}"
                      @foreach($user->Roles as $userRoles)
                      @if($userRoles->pivot->role_id == $role->id) {{"selected"}} @endif
                      @endforeach
                      >{{$role->name}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Đổi thông tin</button>
              </div>
            </div>
          </form>
      </div>
    </div>
</div>
@endsection