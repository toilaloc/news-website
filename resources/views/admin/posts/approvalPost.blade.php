@extends('admin.layouts.index')
@section('title', "Phê duyệt bài viết")
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br />
@endif
    @if (session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách bài viết</h6>
        </div>
        <div class="card-body">
            <table id="tableApproval" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Tên bài viết</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Từ khóa</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Ngày đăng</th>
                        <th scope="col">Xem</th>
                        <th scope="col">Duyệt</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($approvalPosts as $approvalPost)
                        @if($approvalPost->status != 0)
                        <tr>
                            <td>{{ $approvalPost->name }}</td>
                            <td>
                                @foreach ($approvalPost->Categories as $categories)
                                    <span class="badge badge-primary">{{ $categories->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($approvalPost->Tags as $tag)
                                    <a href="{{ url('/tag', $tag->slug) }}"
                                        class="badge badge-success">{{ $tag->name }}</a>
                                @endforeach
                            </td>
                            <td>{{ $approvalPost->Author->fullname }}</td>
                            <td>{{ $approvalPost->created_at->diffForHumans($dateTime)}}</td>
                            <td><button class="btn btn-success btn-sm" href="javscript:;" data-toggle="modal" data-target="#exampleModalScrollable-{{$approvalPost->id}}">Xem bài</button>
                                <!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollable-{{$approvalPost->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Nội dung:</h5>
          <button type="button" class="btn btn-xs btn-icon btn-soft-secondary" data-dismiss="modal" aria-label="Close">
            <svg aria-hidden="true" width="10" height="10" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
            </svg>
          </button>
        </div>
        <div class="modal-body">
            @php echo $approvalPost->content; @endphp
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
                            
                            </td> 

                            <td>
                                <form class="d-inline" action="{{ route('posts.approvaled', $approvalPost->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('bạn có chắc muốn duyệt bài này');">Duyệt bài</button>
                                </form>
                                </td>
                            
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
