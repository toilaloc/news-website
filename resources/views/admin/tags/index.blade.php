@extends('admin.layouts.index')
@section('title', "Quản lý từ khóa")
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách từ khóa</h6>
    </div>
    <div class="card-body">
    <table id="tableTag" class="table table-bordered">
    <thead>
      <tr>
        <th scope="col" width="5%">#</th>
        <th scope="col">Từ khóa</th>
        <th scope="col" width="10%">Chức năng</th>
      </tr>
    </thead>
    <tbody>
        @foreach($tags as $tag)
        <tr>
        <th>{{$tag->id}}</th>
        <td><a href="{{url('/tag', $tag->slug)}}">{{$tag->name}}</a></td>
        <td>
        <form class="d-inline" action="{{route('tags.destroy',$tag->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm d-inline" onclick="return confirm('bạn có chắc muốn xóa');">Xóa</button>
        </form>
        </td>
        </tr>
          @endforeach
    </tbody>
  </table>
    </div>
</div>
@endsection