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
        <h6 class="m-0 font-weight-bold text-primary">List of Categories</h6>
      </div>
      <div class="card-body">

        @foreach($categories as $category)

        {{-- include from blade loadcategory subcategory --}}
        @include('admin.categories.subcategories', ['category' => $category])

        @endforeach
        
      </div>
    </div>
</div>
@endsection