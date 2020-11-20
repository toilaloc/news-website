@extends('frontend.layouts.others.index')

@section('content')
    <!-- Profile Section -->
    <div class="container space-top-1 space-top-sm-2 space-bottom-2">
        <div class="row">
          <div id="stickyBlockStartPoint" class="col-md-5 col-lg-4 mb-7 mb-md-0">
            <div class="js-sticky-block card border p-4"
                 data-hs-sticky-block-options='{
                   "parentSelector": "#stickyBlockStartPoint",
                   "breakpoint": "md",
                   "startPoint": "#stickyBlockStartPoint",
                   "endPoint": "#stickyBlockEndPoint",
                   "stickyOffsetTop": 12,
                   "stickyOffsetBottom": 12
                 }'>
              <div class="text-center">
                <!-- User Content -->
              <img class="img-fluid rounded-circle mx-auto" src="{{asset('uploads/users')}}/{{$user->thumbnail}}" alt="Image Description" width="120" height="120">
  
                <span class="d-block text-body font-size-1 mt-3">Joined in 2017</span>
  
                <div class="mt-3">
                  <a class="btn btn-sm btn-outline-primary transition-3d-hover" href="#">
                    <i class="far fa-envelope mr-2"></i>
                    Send Message
                  </a>
                </div>
                <!-- End User Content -->
              </div>
  
              <div class="border-top pt-4 mt-4">
                <div class="row">
                  <div class="col-6 col-md-12 col-lg-6 mb-4">
                    <!-- Icon Block -->
                    <div class="media">
                      <div class="d-flex">
                        <span class="avatar avatar-xs mr-3">
                          <img class="avatar-img" src="{{asset('frontend/assets/svg/illustrations/review-rating-shield.svg')}}" alt="Image Description">
                        </span>
                        <span class="text-body font-size-1 mt-1">{{$user->hasComments->count()}} Bình luận</span>
                      </div>
                    </div>
                    <!-- End Icon Block -->
                  </div>
  
                  <div class="col-6 col-md-12 col-lg-6 mb-4">
                    <!-- Icon Block -->
                    <div class="d-flex">
                      <span class="avatar avatar-xs mr-3">
                        <img class="avatar-img" src="{{asset('frontend/assets/svg/illustrations/star.svg')}}" alt="Image Description">
                      </span>
                      <span class="text-body font-size-1 mt-1">4.87 đánh giá</span>
                    </div>
                    <!-- End Icon Block -->
                  </div>
  
                  <div class="col-6 col-md-12 col-lg-6 mb-4 col-6 col-md-12 mb-lg-0">
                    <!-- Icon Block -->
                    <div class="d-flex">
                      <span class="avatar avatar-xs mr-3">
                        <img class="avatar-img" src="{{asset('frontend/assets/svg/illustrations/medal.svg')}}" alt="Image Description">
                      </span>
                      <span class="text-body font-size-1 mt-1">Tác giả</span>
                    </div>
                    <!-- End Icon Block -->
                  </div>
  
                  <div class="col-6 col-md-12 col-lg-6">
                    <!-- Icon Block -->
                    <div class="d-flex">
                      <span class="avatar avatar-xs mr-3">
                        <img class="avatar-img" src="{{asset('frontend/assets/svg/illustrations/add-file.svg')}}" alt="Image Description">
                      </span>
                      <span class="text-body font-size-1 mt-1">{{$user->hasPosts->count()}} Bài viết</span>
                    </div>
                    <!-- End Icon Block -->
                  </div>
                </div>
              </div>
  
              <div class="border-top pt-4 mt-4">
                <h1 class="h4 mb-4">Bạn bè</h1>
  
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 mb-2">
                        <a class="media" href="#">
                          <div class="icon icon-xs icon-soft-secondary mr-3">
                            <i class="pl-1 fas fa-user-friends nav-icon"></i>
                          </div>
                          <div class="media-body">
                            <span class="d-inline font-size-1 font-weight-bold">Người theo dõi</span>
                            <span class="badge badge-soft-navy badge-pill nav-link-badge">0</span>
                          </div>
                        </a>
                        <!-- End Social Profiles -->
                      </div>
                  <div class="col-12 col-md-12 col-lg-12">
                    <a class="media" href="#">
                      <div class="icon icon-xs icon-soft-secondary mr-3">
                        <i class="pl-1 fas fa-users nav-icon"></i>
                      </div>
                      <div class="media-body">
                        <span class="d-inline font-size-1 font-weight-bold">Đang theo dõi</span>
                        <span class="badge badge-soft-navy badge-pill nav-link-badge">0</span>
                      </div>
                    </a>
                    <!-- End Social Profiles -->
                  </div>
                </div>
              </div>
  
              <div class="border-top text-center pt-4 mt-4">
                <a class="text-body small" href="#">
                  <i class="far fa-flag mr-1"></i> Báo cáo vi phạm
                </a>
              </div>
            </div>
          </div>
  
          <div class="col-md-7 col-lg-8">
            <div class="ml-lg-6">
              <div class="mb-3 mb-sm-0 mr-2">
              <h2>{{$user->fullname}}</h2>
              </div>
  
              <div class="media text-body font-size-1 mb-3">
                <i class="fas fa-briefcase mt-1 mr-2"></i>
                <div class="media-body">
                  Tác giả tại Tin tức tổng hợp.
                </div>
              </div>
  
            <p>{{$user->bio}}</p>
  
              <!-- Read More - Collapse -->
              <div class="collapse" id="collapseDescriptionSection">
                <p>Over the course of her career she has developed a skill set in analyzing data and she hopes to use her experience in teaching and data science to help other people learn the power of programming the ability to analyze data, as well as present the data in clear and beautiful visualizations.</p>
              </div>
              <!-- End Read More - Collapse -->
  
              <!-- Link -->
              <a class="link link-collapse small font-size-1 font-weight-bold" data-toggle="collapse" href="#collapseDescriptionSection" role="button" aria-expanded="false" aria-controls="collapseDescriptionSection">
                <span class="link-collapse-default">Đọc thêm</span>
                <span class="link-collapse-active">Thu gọn lại</span>
                <span class="link-icon ml-1">+</span>
              </a>
              <!-- End Link -->
  
              <!-- Courses -->
              <div class="border-top pt-5 mt-5">
              <h3 class="mb-4">Bài viết của Tác giả: {{$user->fullname}}</h3>
  
                    @if($user->hasPosts)
                    @foreach($user->hasPosts as $post)
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
                                    <a style="color: #333;" href="{{url('category', $categories->slug)}}">{{$categories->name}}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">
                                {{$post->desc}}</p>
                            </div>
                        </div>
                        @endforeach
                        @else
                        {{"Tác giả này hiện chưa có bài viết nào!"}}
                        @endif
                <div class="text-right font-size-1 mt-6">
                  <a class="font-weight-bold" href="courses-listing.html">Xem thêm <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
              </div>
              <!-- End Courses -->

  
              <!-- Sticky Block End Point -->
              <div id="stickyBlockEndPoint"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Profile Section -->
@endsection
