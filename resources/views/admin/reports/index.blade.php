@extends('admin.layouts.index')
@section('title', "Danh sách báo cáo")
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách báo cáo</h6>
    </div>
    <div class="card-body">
    <table id="tableReport" class="table table-bordered">
    <thead>
      <tr>
        <th scope="col" width="5%">#</th>
        <th scope="col">Nội dung báo cáo</th>
        <th scope="col">Lý do báo cáo</th>
        <th scope="col">Người báo cáo</th>
        <th scope="col">Người bị báo cáo</th>
        <th scope="col">Loại báo cáo</th>
        <th scope="col">Xem</th>
        <th scope="col">Xử lý</th>
      </tr>
    </thead>
    <tbody>
        @foreach($reports as $report)
       
        <tr>
        <th>{{$report->id}}</th>
        <td> 
          @if($report->post_id != NULL && $report->type == "post"){{"Bài viết"}} <a href="{{$report->Post->name}}">{{$report->Post->name}}</a> @endif
          @if($report->user_id != NULL && $report->type == "user"){{"Người dùng"}} <a href="{{url('author',$report->User->username)}}">{{$report->User->fullname}}</a> @endif
          @if($report->comment_id != NULL && $report->type == "comment"){{"Bình luận"}} "{{$report->reportComment->content}}" @endif     
        </td>
        <th>{{$report->reason}}</th>
        <td>{{$report->Reporter->fullname}}</td>
        <td> @if($report->post_id != NULL){{App\Models\Users::find($report->Post->author_id)->fullname}} @endif</td>
        <td> <span class="badge badge-success">{{$report->type}}</span></td>
        <td>
        <a type="submit" class="btn btn-primary btn-sm d-inline" href="@if($report->post_id != NULL){{url('post', $report->Post->slug)}} @endif">Xem</a>
        </td>
        <td>
            @if($report->post_id != NULL && $report->type == "post")
        <form class="d-inline" action="{{route('posts.destroy', $report->post_id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm d-inline" onclick="return confirm('Bạn sẽ xóa bài viết này. Bạn chắc chắn chứ?');">Xử lý</button>
        </form>
            @endif

            {{-- Nếu là comment --}}
            @if($report->comment_id != NULL && $report->type == "comment")
        <form class="d-inline" action="{{route('comments.destroy', $report->comment_id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm d-inline" onclick="return confirm('Bạn sẽ xóa bình luận này. Bạn chắc chắn chứ?');">Xử lý</button>
        </form>
            @endif

            {{-- Nếu là người dùng thì đếm số lần vi phạm. Nếu quá 3 lần sẽ khóa tài khoản --}}
            @if($report->user_id != NULL && $report->type == "user")
            @if($report->where('user_id', $report->user_id)->where('type', 'user')->get()->count() >= 3)
      <form class="d-inline" action="" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm d-inline" onclick="return confirm('Bạn sẽ khóa tài khoản này. Bạn chắc chắn chứ?');">Khóa tài khoản</button>
            </form>
            @else
          <button type="submit" class="btn btn-danger btn-sm d-inline" >{{$report->where('user_id', $report->user_id)->where('type', 'user')->get()->count()}} {{"lần bị báo cáo  "}}</button>
            @endif
            @endif
            </td>
        </tr>
       
          @endforeach
    </tbody>
  </table>
    </div>
</div>
@endsection