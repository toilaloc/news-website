@if($postAuthor->count() == 0)
{{"Tác giả này chưa có bài viết mới"}}
@else
@foreach($postAuthor as $postAuthors)
<div class="col-sm-6 col-md-4 mb-5">
    <!-- Card Info -->
    <div class="card h-100">
        <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$postAuthors->thumbnail}}" alt="Image Description">
        <div class="card-body">
            <p class="mb-0 h5">{{$postAuthors->name}}</p>
        </div>
        <div class="card-footer">
        <a class="font-weight-bold" href="{{url('post',$postAuthors->slug)}}">Đọc ngay <i
                    class="fas fa-angle-right fa-sm ml-1"></i></a>
        </div>
    </div>
    <!-- End Card Info -->
</div>
@endforeach
@endif