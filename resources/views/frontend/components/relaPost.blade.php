@if($relaPost->count() == 0)
{{"Không có bài viết"}}
@else
@foreach($relaPost as $relaPosts)
<div class="col-md-6">
    <!-- Blog Card -->
    <article class="border-bottom h-100 py-5">
        <div class="row justify-content-between">
            <div class="col-6">
                @foreach($relaPosts->categories as $categories)
            <a class="d-block small font-weight-bold text-cap mb-2" href="{{url('category',$categories->slug)}}">{{$categories->name}}</a>
                @endforeach
            <h4 class="mb-0"><a class="text-inherit" href="{{url('post',$relaPosts->slug)}}">{{$relaPosts->name}}</a></h4>
            </div>

            <div class="col-5">
            <img class="img-fluid" src="{{asset('uploads/posts/thumbnail')}}/{{$relaPosts->thumbnail}}"
                    alt="{{$relaPosts->name}}">
            </div>
        </div>
    </article>
    <!-- End Blog Card -->
</div>
@endforeach
@endif
