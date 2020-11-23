@extends('admin.layouts.index')

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
            <table id="tablePost" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Tên bài viết</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Từ khóa</th>
                        <th scope="col">Đánh giá</th>
                        <th scope="col">Ngày đăng</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td><a href="{{ url('/post', $post->slug) }}">{{ $post->name }}</a></td>
                            <td><a href="{{ url('/author', $post->Author->username) }}">{{ $post->Author->fullname }}</td>
                            <td>
                                @foreach ($post->Categories as $categories)
                                    <span class="badge badge-primary">{{ $categories->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($post->Tags as $tag)
                                    <a href="{{ url('/tags', $tag->slug) }}"
                                        class="badge badge-success">{{ $tag->name }}</a>
                                @endforeach
                            </td>
                            <td>{{ round(App\Models\Post_votes::where('post_id', $post->id)->avg('rate'), 2) }}</td>
                            <td>{{ $post->date }}</td>
                            <td><a class="btn btn-success btn-sm" href="{{ route('posts.edit', $post->id) }}">Sửa</a></td>
                            <td>
                                <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </td>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
