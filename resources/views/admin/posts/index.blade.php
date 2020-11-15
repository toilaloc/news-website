@extends('admin.layouts.index')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List of Categories</h6>
    </div>
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Author</th>
        <th scope="col">Categories</th>
        <th scope="col">Vote</th>
        <th scope="col">View</th>
        <th scope="col">Reviewer</th>
        <th scope="col">Date</th>
        <th scope="col" colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
        <th scope="row">{{$post->id}}</th>
        <td><a href="{{url('/post', $post->slug)}}">{{$post->name}}</a></td>
        <td>{{$post->Author->username}}</td>
        <td>
          @foreach($post->Categories as $categories)
          <span class="badge badge-primary">{{$categories->name}}</span>
          @endforeach
        </td>
        <td>{{$post->vote}}</td>
        <td>{{$post->view}}</td>
        <td>{{$post->reviewer}}</td>
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