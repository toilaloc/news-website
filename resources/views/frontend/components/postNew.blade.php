<div class="card-header" style="padding: 0rem 0rem; border-bottom: none;">
    <div class="col-lg">
        <div class="mb-7">
            <div class="mb-3 border-bottom">
                <h3>Tin mới nhất</h3>
            </div>
            @if($postNew->count() == 0)
            {{"Chưa có bài viết để hiển thị"}}
            @else
           @foreach($postNew as $news)
           @if($news->status != 1) 
           <article class="mb-3">
                <div class="media">
                    <div class="avatar avatar-lg mr-3">
                    <img class="img-fluid"  src="{{asset('uploads/posts/thumbnail')}}/{{$news->thumbnail}}" alt="Image Description">
                    </div>
                    <div class="media-body">
                    <h4 class="h6 mb-0"><a class="text-inherit" href="{{url('post', $news->slug)}}">{{$news->name}}</a></h4>
                    <small class="d-inline-block">{{$news->date}}</small>
                    </div>
                </div>
            </article>
            @endif
            @endforeach
            @endif
            <!-- End Blog -->
        </div>
    </div>
</div>