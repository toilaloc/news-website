@extends('admin.layouts.index')
@section('title', "Bài viết của tôi")
@section('content')

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
                        <th scope="col">Đánh giá</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Ngày đăng</th>
                        <th scope="col">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($myposts as $mypost)
                        <tr>
                            <td>{{ $mypost->name }}</td>
                            <td>
                                @foreach ($mypost->Categories as $categories)
                                    <span class="badge badge-primary">{{ $categories->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($mypost->Tags as $tag)
                                    <a href="{{ url('/tag', $tag->slug) }}"
                                        class="badge badge-success">{{ $tag->name }}</a>
                                @endforeach
                            </td>
                            <td>{{ round(App\Models\Post_votes::where('post_id', $mypost->id)->avg('rate'), 2) }}</td>
                            <td>
                                @if($mypost->status == 0)
                                <a href="#" class="badge badge-success">Đã được duyệt</a>
                                @else
                                <a href="#" class="badge badge-secondary">Đang chờ duyệt</a>
                                @endif
                            </td>
                            <td>{{ $mypost->created_at->diffForHumans($dateTime)}}</td>
                            <td><a class="btn btn-success btn-sm" href="{{ route('posts.edit', $mypost->id) }}">Sửa</a></td>
                            {{-- <td>
                                <form class="d-inline" action="{{ route('posts.destroy', $mypost->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('bạn có chắc muốn xóa');">Xóa</button>
                                </form>
                                </td> --}}
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
