
<div class="container space-2">
    <!-- Title -->
    <style>
        .clear-border-radius {
            border-radius: 0rem!important;
        }
    </style>
    <div class="mb-2 border-bottom">
    <h3>Bài viết khác của {{$post->Author->fullname}}</h3>
    </div>
    <!-- End Title -->
  
    <div class="row mx-n2 mb-5 mb-md-9">
        @if($postAuthor->count() == 0)
        {{"Tác giả này chưa có bài viết mới"}}
        @else
        @foreach($postAuthor as $postAuthors)
        @if($postAuthors->status != 1)
      <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-lg-0">
        <!-- Card -->
        <a class="card h-100 transition-3d-hover" href="{{url('post',$postAuthors->slug)}}">
          <img class="card-img-top clear-border-radius" src="{{asset('uploads/posts/thumbnail')}}/{{$postAuthors->thumbnail}}" alt="Image Description">
          <div class="card-body">
              @foreach($postAuthors->Categories as $categories)
                <span class="d-inline small font-weight-bold text-cap mb-2">{{$categories->name}}</span>
              @endforeach
            <h5 class="mb-0">{{$postAuthors->name}}</h5>
          </div>
        </a>
        <!-- End Card -->
      </div>

      @if($loop->index == 3)
@break
@endif
@endif
@endforeach
@endif 
    </div>
  
    <!-- Info -->
    <div class="position-relative z-index-2 text-center">
      <div class="d-inline-block font-size-1 border bg-white text-center rounded-pill py-3 px-4">
      Tìm thêm về tác giả này <a class="font-weight-bold ml-3" href="{{url('author',$post->Author->username)}}">Tìm hiểu ngay <span class="fas fa-angle-right ml-1"></span></a>
      </div>
    </div>
    <!-- End Info -->
  </div>
  <!-- End Articles Section -->