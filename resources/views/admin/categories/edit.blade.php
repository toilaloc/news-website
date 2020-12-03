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
      <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa danh mục: {{$category->name}}</h6>
      </div>
      <div class="card-body">
        <form action="{{route('categories.update', $category->id)}}" method="post" enctype="multipart/form-data">
          @method('PATCH')
          @csrf
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Tên danh mục</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="categoryName" value="{{$category->name}}">
              <input type="hidden" name="slugCategory" value="{{route('categories.getslug')}}" />
              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Đường dẫn</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="slug" id="categorySlug" value="{{$category->slug}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Parent</label>
                <div class="col-sm-10">
                    <select name="category_id" class="form-control">
                    @foreach($categories as $listcategory)  
                    
                    <option value="{{$listcategory->id}}" 
                        {{-- check if same id parent then auto selected  --}}
                        @if($category->category_id == $listcategory->id)
                        {{"selected"}}
                        @endif
                        {{-- check if same id then hide --}}
                        @if($category->id == $listcategory->id)
                        {{'style=display:none;'}}
                        @endif
                        >
                        {{$listcategory->name}}
                    </option>
                    
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                <textarea class="form-control" name="description" id="Description" row="3" placeholder="Short Description">{{$category->description}}</textarea>
                </div>
              </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit</button>
              </div>
            </div>
          </form>
      </div>
    </div>
</div>
@endsection