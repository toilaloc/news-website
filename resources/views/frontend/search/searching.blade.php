
@extends('frontend.layouts.others.index')

@section('content')
<!-- Hero Section -->
<div class="container space-2 space-lg-3">
    <div class="row justify-content-lg-between">
        <div class="col-lg-8">
            <div class="mb-3">
            <h3>KẾT QUẢ TÌM KIẾM TỪ KHÓA "{{$key}}"</h3>
            </div>
            <!-- Card -->

            @foreach($result as $post)
            @if($post->status != 1)
            <div class="row mb-2 pb-2 border-bottom">
                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0">
                    <div class="position-relative">
                        <a href="course-description.html">
                        <img class="img-fluid w-100" src="{{asset('uploads/posts/thumbnail')}}/{{$post->thumbnail}}" alt="Image Description" style="border-radius: 0rem;">
                        </a>
                    </div>
                </div>
                <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="media mb-2">
                        <div class="media-body">
                            <a href="{{url('post',$post->slug)}}"><h3 class="h4 text-hover-primary mb-0">{{$post->name}}</h3></a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center small text-muted">
                        <div class="d-inline-block mr-2">
                            {{$dateTime->diffForHumans($post->created_at)}}
                        </div>
                        <div class="d-inline-block mr-2">
                            @foreach($post->Categories as $categories)
                        <a style="color: #333;" href="{{url('category',$categories->slug)}}">{{$categories->name}}</a>
                            @endforeach
                        </div>
                    </div>
                <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">{!! Str::limit($post->desc, 200, ' ...') !!}</p>
                </div>
            </div>
            @endif
            @endforeach

            {{ $result->withQueryString()->links() }}


            <!-- End Card -->
            <!-- Pagination -->
            <!-- End Pagination -->
        </div>
        <!-- Sticky Block End Point -->
        <div id="stickyBlockEndPoint"></div>

        <div class="col-lg-3">
            <div class="mb-7">
                <div class="mb-3">
                    <h3>Đăng ký nhận tin</h3>
                </div>

                <!-- Form -->
                @include('frontend.components.subcribe')
                <!-- End Form -->
            </div>


            <!-- Sticky Block Start Point -->
            <div id="stickyBlockStartPoint"></div>

            <div class="js-sticky-block"
                 data-hs-sticky-block-options='{
                 "parentSelector": "#stickyBlockStartPoint",
                 "breakpoint": "lg",
                 "startPoint": "#stickyBlockStartPoint",
                 "endPoint": "#stickyBlockEndPoint",
                 "stickyOffsetTop": 40,
                 "stickyOffsetBottom": 20
               }'>
                <div class="mb-7">
                    <div class="mb-3">
                        <h3>Đang được quan tâm</h3>
                    </div>

                    <!-- Blog -->
                    @foreach($hotPosts as $hotPost)
                    @if($hotPost->status != 1)
                    <article class="mb-5">
                        <div class="media align-items-center text-inherit">
                            <div class="avatar avatar-lg mr-3">
                            <img class="avatar-img" src="{{asset('uploads/posts/thumbnail')}}/{{$hotPost->thumbnail}}" alt="{{$hotPost->name}}">
                            </div>
                            <div class="media-body">
                            <h4 class="h6 mb-0"><a class="text-inherit" href="{{url('post',$hotPost->slug)}}">{{$hotPost->name}}</a></h4>
                            </div>
                        </div>
                    </article>
                    @endif
                    @endforeach
                    <!-- End Blog -->
                    
                </div>

            </div>
        </div>

            </div>
</div>
@endsection
