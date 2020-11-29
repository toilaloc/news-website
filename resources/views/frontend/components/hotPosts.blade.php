@if($hotPosts->count() == 0)
{{"Chưa có bài viết để hiển thị"}}
@else
@foreach($hotPosts as $hotPost)

<article class="mb-3">
    <div class="media">
        <div class="avatar avatar-lg mr-3">
            <img class="img-fluid"
        src="{{asset('uploads/posts/thumbnail')}}/{{$hotPost->thumbnail}}"
        alt="{{$hotPost->name}}">
        </div>
        <div class="media-body">
        <h4 class="h6 mb-0"><a class="text-inherit" href="{{url('post', $hotPost->slug)}}">{{$hotPost->name}}</a></h4>
        <small class="d-inline-block">{{$hotPost->create_at}}</small>
        </div>
    </div>
</article>
<!-- End Blog -->
@endforeach
@endif