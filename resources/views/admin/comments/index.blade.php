@extends('admin.layouts.index')

@section('content')
    <div class="col-lg-12 mb-12 sm-12">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
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
                <h6 class="m-0 font-weight-bold text-primary">Danh sách bình luận</h6>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered" id="tableComment">
                    <thead>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Nội dung</th>
                            <th scope='col'>Số phản hồi</th>
                            <th scope='col'>Người bình luận</th>
                            <th scope='col'>Bài viết</th>
                            <th scope='col'>Ngày bình luận</th>
                            <th scope='col'>Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $comment)
                        <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->content}}</td>
                        <td>{{$comment->subComments->count()}}</td>
                        <td><a href="{{url('user/'.$comment->Author->username)}}"><img data-toggle="tooltip" title="{{$comment->Author->fullname}}" style="height: 50px; width: 50px; border-radius: 50%;" src="{{asset('uploads/users/'.$comment->Author->thumbnail)}}"/></a></td>
                        <td><a href="{{url('post/'.$comment->Posts->slug)}}">{{$comment->Posts->name}}</a></td>
                        <td>{{$comment->created_at}}</td>
                        <td>
                            <form action="{{route('comments.destroy',$comment->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('bạn có chắc muốn xóa');">Xóa</button></td>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
