@extends('frontend.layouts.others.index')

@section('content')
 <!-- Hero Section -->
 <div class="container mt-10">
    <div class="row justify-content-lg-between">
      <div class="col-lg-8">
        <div class="mb-3">
        <h3>DANH MỤC: <span class="text-uppercase">{{$category->name}}</span></h3>
        @if(isset($getChildCate))
        @foreach($getChildCate as $childCates)
            <li class="d-inline"><a href="{{ url('category', $childCates->slug) }}"
             style="color:#888; text-transform: uppercase; padding-right: 10px;">{{ $childCates->name }}</a></li>
      
        @endforeach
        @endif
        </div>
        <!-- Card -->
        @foreach($posts as $post)
        @if($post->status != 1)
        <div class="row mb-2 pb-2 border-bottom">
              <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0">
                <div class="position-relative">
                  <a href="course-description.html">
                  <img class="img-fluid w-100" src="{{asset('uploads/posts/thumbnail')}}/{{$post->thumbnail}}" alt="{{$post->name}}" style="border-radius: 0rem;">
               </a>
                </div>
              </div>
              <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="media mb-2">
                  <div class="media-body">
                  <a href="{{url('post', $post->slug)}}"><h3 class="h4 text-hover-primary mb-0" >{{$post->name}}</h3></a>
                  </div>
                </div>
                <div class="d-flex justify-content-start align-items-center small text-muted">
                  <div class="d-inline-block mr-2">
                    {{$post->created_at}}
                  </div>
                  <div class="d-inline-block mr-2">
                      @foreach($post->Categories as $categories)
                    <a style="color: #333;" href="{{url('category',$categories->slug)}}">{{$categories->name}}</a>
                    @endforeach
                  </div>
                </div>
                <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">
                {{$post->desc}}</p>
              </div>
          </div>
          @endif
          @endforeach

          {{-- Nếu có chuyên mục con thì show thêm --}}
          @if(isset($getChildCate))
          @foreach($getChildCate as $childCates)
          @foreach($childCates->getPosts($childCates->id) as $postChild)
          @if($postChild->status != 1)
          <div class="row mb-2 pb-2 border-bottom">
            <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0">
              <div class="position-relative">
                <a href="course-description.html">
                <img class="img-fluid w-100" src="{{asset('uploads/posts/thumbnail')}}/{{$postChild->thumbnail}}" alt="{{$postChild->name}}" style="border-radius: 0rem;">
             </a>
              </div>
            </div>
            <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
              <div class="media mb-2">
                <div class="media-body">
                <a href="{{url('post', $postChild->slug)}}"><h3 class="h4 text-hover-primary mb-0" >{{$postChild->name}}</h3></a>
                </div>
              </div>
              <div class="d-flex justify-content-start align-items-center small text-muted">
                <div class="d-inline-block mr-2">
                  {{$postChild->created_at}}
                </div>
                <div class="d-inline-block mr-2">
                    @foreach($postChild->Categories as $categories)
                  <a style="color: #333;" href="{{url('category',$categories->slug)}}">{{$categories->name}}</a>
                  @endforeach
                </div>
              </div>
              <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">
              {{$postChild->desc}}</p>
            </div>
        </div>
            {{-- @if($loop->index == 2)
                    @break
                @endif --}}
                @endif
            @endforeach 
          @endforeach
          @endif

      </div>
        <!-- Sticky Block End Point -->
        <div id="stickyBlockEndPoint"></div>

      <div class="col-lg-3">
        <div class="mb-7">
          <div class="mb-3">
            <h3>Newsletter</h3>
          </div>

          <!-- Form -->
          <form class="js-validate mb-2">
            <label class="sr-only" for="subscribeSr">Subscribe</label>
            <div class="input-group input-group-flush mb-3">
              <input type="email" class="form-control form-control-sm" name="email" id="subscribeSr" placeholder="Your email" aria-label="Your email" required
                    data-msg="Please enter a valid email address.">
            </div>
            <button type="submit" class="btn btn-sm btn-primary btn-block">Subscribe</button>
          </form>
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
              <h3>Bài viết đang hot</h3>
            </div>

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
          </div>

        </div>
      </div>
  </div>
</div>
  <!-- End Blogs Section -->
@endsection