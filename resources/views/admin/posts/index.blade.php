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
      <h6 class="m-0 font-weight-bold text-primary">List of Categories</h6>
    </div>
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Tên bài viết</th>
        <th scope="col">Tác giả</th>
        <th scope="col">Danh mục</th>
        {{-- <th scope="col">Vote</th>
        <th scope="col">View</th>
        <th scope="col">Reviewer</th> --}}
        <th scope="col">Từ khóa</th>
        <th scope="col">Ngày đăng</th>
        <th scope="col" colspan="2">Chức năng</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
        <td><a href="{{url('/post', $post->slug)}}">{{$post->name}}</a></td>
        <td>{{$post->Author->username}}</td>
        <td>
          @foreach($post->Categories as $categories)
          <span class="badge badge-primary">{{$categories->name}}</span>
          @endforeach
        </td>
        <td>
          @foreach($post->Tags as $tag)
        <a href="{{url('/tags', $tag->slug)}}" class="badge badge-success">{{$tag->name}}</a>
          @endforeach
        </td>
        <td>{{$post->date}}</td>
      <td><a class="btn btn-success btn-sm" href="{{route('posts.edit', $post->id)}}">Sửa</a></td>
        <td>
          <form action="{{route('posts.destroy',$post->id)}}" method="POST">
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