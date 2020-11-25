@extends('admin.layouts.index')

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
        <h6 class="m-0 font-weight-bold text-primary">Thêm quyền người dùng</h6>
      </div>
      <div class="card-body">
        <form action="{{route('roles.store')}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="categoryName" placeholder="Name">
              <input type="hidden" name="slugCategory" value="{{route('categories.getslug')}}" />
              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="slug" id="categorySlug" placeholder="URL">
                </div>
            </div>
            <div class="form-group row">
                @foreach($permissions as $permisson)
                <div class="col-sm-3">
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="permission_id[]" id="inlineCheckbox1" value="{{$permisson->id}}">
                        <label class="form-check-label" for="inlineCheckbox1">{{$permisson->name}}</label>
                      </div>
                </div>
                @endforeach
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Thêm</button>
              </div>
            </div>
          </form>
      </div>
    </div>
</div>
@endsection