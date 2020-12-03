@extends('admin.layouts.index')
@section('title', "Sửa quyền người dùng")
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
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sửa quyền người dùng</h6>
      </div>
      <div class="card-body">
        <form action="{{route('roles.update', $role->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="categoryName" value="{{$role->name}}">
              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="slug" id="categorySlug" value="{{$role->slug}}">
                </div>
            </div>
            <div class="form-group row">
                @foreach($permissions as $permission)
                <div class="col-sm-4">
                   
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="permission_id[]" id="inlineCheckbox1" value="{{$permission->id}}"  
                    @foreach($role->Permissions as $permissionOld)
                    @if($permissionOld->pivot->permission_id == $permission->id) 
                    {{"checked"}}
                    @endif
                    @endforeach>
                        <label class="form-check-label" for="inlineCheckbox1">{{$permission->name}}</label>
                      </div>
                </div>
                @endforeach
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sửa đổi quyền</button>
              </div>
            </div>
          </form>
      </div>
    </div>
</div>
@endsection