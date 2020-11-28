@extends('admin.layouts.index')

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
            <table id="tableMyPost" class="table table-striped table-bordered">
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
                            <td>{{ $approvalPost->date }}</td>
                            <td><a class="btn btn-success btn-sm" href="{{ route('posts.edit', $approvalPost->id) }}">Xem bài</a></td> 

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
