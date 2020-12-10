
@extends('frontend.layouts.index')
@section('title', 'F8News - Trang tin tức tổng hợp chính xác và uy tín')
@section('description', 'F8News là Trang tin tức phi lợi nhuận. Với mục đích đem lại tin tức chính xác và cập nhật cho mọi người dân.')
@section('keywords', 'f8news, tin tức mới, đọc tin tức, đọc báo online, đọc tin tức nhanh, báo mạng, đọc báo mạng')
@section('content')
<!-- Hero Section -->
<div class="position-relative">
    <!-- Main Slider -->
    <div id="heroSlider" class="js-slick-carousel slick"
         data-hs-slick-carousel-options='{
           "vertical": true,
           "verticalSwiping": true,
           "autoplay": true,
           "autoplaySpeed": 10000,
           "dots": true,
           "dotsClass": "slick-pagination slick-pagination-white d-lg-none position-absolute bottom-0 right-0 left-0 mb-3",
           "asNavFor": "#heroSliderNav",
           "responsive": [
             {
               "breakpoint": 576,
               "settings": {
                 "vertical": false,
                 "verticalSwiping": false
               }
             }
           ]
         }'>

         @foreach($bannerPost as $banner)
        <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem" style="background-image: url({{asset('uploads/posts/thumbnail/'.$banner->thumbnail)}});">
            <!-- News Block -->
            <div class="container d-flex align-items-center min-h-620rem">
                <div class="w-lg-40 mr-5">
                    <!-- Author -->
                    <div class="media align-items-center mb-3"
                         data-hs-slick-carousel-animation="fadeInUp">
                        <div class="avatar avatar-sm avatar-circle mr-3">
                            <img class="avatar-img" src="{{asset('uploads/users/'.$banner->Author->thumbnail)}}" alt="Image Description">
                        </div>
                        <div class="media-body">
                            <a class="text-white" href="{{url('author',$banner->Author->username)}}">{{$banner->Author->fullname}}</a>
                        </div>
                    </div>
                    <!-- End Author -->

                    <div class="mb-5">
                        <h3 class="h1 font-weight-bold text-white"
                            data-hs-slick-carousel-animation="fadeInUp"
                    data-hs-slick-carousel-animation-delay="150">{{$banner->name}}</h3>
                    </div>
                <a class="btn btn-primary btn-wide transition-3d-hover" href="{{url('post', $banner->slug)}}"
                       data-hs-slick-carousel-animation="fadeInUp"
                       data-hs-slick-carousel-animation-delay="300">Đọc tin <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
            </div>
            <!-- End News Block -->
        </div>
        @endforeach
    </div>
    <!-- End Main Slider -->

    <!-- Slider Nav -->
    <div class="container slick-pagination-line-wrapper content-centered-y right-0 left-0">
        <div class="content-centered-y right-0 mr-3">
            <div id="heroSliderNav" class="js-slick-carousel slick slick-pagination-line max-w-27rem ml-auto"
                 data-hs-slick-carousel-options='{
               "vertical": true,
               "verticalSwiping": true,
               "autoplay": true,
               "autoplaySpeed": 10000,
               "slidesToShow": 3,
               "isThumbs": true,
               "asNavFor": "#heroSlider"
             }'>
             @foreach($bannerPost as $banner)
                <div class="js-slide my-3">
                <span class="text-white">{{$banner->name}}</span>

                    <span class="slick-pagination-line-progress">
              <span class="slick-pagination-line-progress-helper"></span>
            </span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Slider Nav -->
</div>
<!-- End Hero Section -->

<!-- Show Content Bellow Header-->
<div class="container space-1 space-lg-1">
    <div class="mb-3">
        <h3>TIN NÓNG</h3>
    </div>
    <div class="row">
        <div class="col-lg-4 d-none d-lg-block">
            {{-- lấy 5 bài tin công nghệ --}}
            @if($breakingNewsLeft->count() == 0)
            {{'Không có bài viết để hiển thị'}}
            @else
            @foreach($breakingNewsLeft as $contentsLeft)
            <article class="mb-3 pb-3 border-bottom">
                <div class="media  text-inherit">
                    <div class="avatar avatar-lg mr-3">
                    <img class="avatar-img" src="{{asset('uploads/posts/thumbnail')}}/{{$contentsLeft->thumbnail}}" alt="Image Description" style="border-radius: 0rem;">
                    </div>
                    <div class="media-body">
                        <h4 class="h6 mb-0"><a class="text-inherit" href="{{url('post',$contentsLeft->slug)}}">{!! Str::limit($contentsLeft->name, 65, ' ...') !!}</a></h4>
                    </div>
                </div>
            </article>
                    @if($loop->index == 4)
                        @break
                        @endif
            @endforeach
            @endif
        </div>


        <div class="col-lg-5 col-md-7 d-none d-lg-block">
            @if($breakingNewsCenter->count() == 0)
            {{'Không có bài viết để hiển thị'}}
            @else
            @foreach($breakingNewsCenter as $postCenter)
                @if($loop->first)
                <article class="card" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1)">
                <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$postCenter->thumbnail}}" alt="Image Description">
                <div class="card-body" style="padding: 0.3rem;">
                    <h2 class="h3"><a class="text-inherit" href="{{url('post',$postCenter->slug)}}">{!! Str::limit($postCenter->name, 75, ' ...') !!}</a></h2>
                    <p>{{$postCenter->desc}}</p>
                </div>
                </article>
                @endif
            @endforeach
            @endif
        </div>

        <div class="col-lg-3 col-md-5 d-none d-lg-block">
            @if($breakingNewsRight->count() == 0)
            {{'Không có bài viết để hiển thị'}}
            @else
            @foreach($breakingNewsRight as $postRight)
            <article class="card" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1)">
                <div class="card-img-top">
                <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$postRight->thumbnail}}" alt="Image Description">
                </div>
                <div class="card-body" style="padding: 0.1rem;">
                    <h5><a class="text-inherit" href="{{url('post',$postRight->slug)}}">{!! Str::limit($postRight->name, 45, ' ...') !!}</a></h5>
                </div>
            </article>
                @if($loop->index == 1)
                    @break
                @endif
            @endforeach
            @endif
        </div>
        <!-- End Blog -->

        <div class="col-sm-12 col-md-12 d-lg-none d-md-block">
            <style>.slick-equal-height .slick-list {
                    height: 100%!important;
            }
            </style>
            <div class="js-slick-carousel slick slick-equal-height slick-gutters-1"
                 data-hs-slick-carousel-options='{
          "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-soft-white slick-arrow-left slick-arrow-centered-y rounded-circle ml-sm-2 ml-xl-4\"></span>",
          "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-soft-white slick-arrow-right slick-arrow-centered-y rounded-circle mr-sm-2 mr-xl-4\"></span>",
          "autoplay": true,
       "autoplaySpeed": 2500,
       "infinite": true,
          "adaptiveHeight": true,
          "responsive": [{
            "breakpoint": 992,
              "settings": {
                "slidesToShow": 2
              }
            }, {
            "breakpoint": 768,
            "settings": {
              "slidesToShow": 1
            }
          }]
        }'>
        @if($breakingNewsLeft->count() == 0)
        {{'Không có bài viết để hiển thị'}}
        @else
        @foreach($breakingNewsLeft as $contentsLeft)
                <div class="js-slide bg-img-hero-center">
                <a class="card h-100 transition-3d-hover" href="{{url('post',$contentsLeft->slug)}}">
                <div  style=" background-image: url('{{asset('uploads/posts/thumbnail')}}/{{$contentsLeft->thumbnail}}'); min-height: 230px; max-height:330px;  background-position: center; background-repeat: no-repeat; background-size: cover; ">



                <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$contentsLeft->thumbnail}}" alt="Image Description" style=" visibility:hidden;" >

</div>



                        <div class="card-body">
                            <h5 class="mb-0">{{$contentsLeft->name}}</h5>
                            <p class="font-size-1 text-body mb-0">{{$contentsLeft->desc}}</p>
                        </div>
                    </a>
                </div>
        @endforeach
        @endif

        @if($breakingNewsCenter->count() == 0)
        {{'Không có bài viết để hiển thị'}}
        @else
        @foreach($breakingNewsCenter as $contentCenter)
        @if($loop->first)
                <div class="js-slide bg-img-hero-center">
                <a class="card h-100 transition-3d-hover" href="{{url('post',$contentCenter->slug)}}">
                <div  style=" background-image: url('{{asset('uploads/posts/thumbnail')}}/{{$contentCenter->thumbnail}}'); min-height: 230px; max-height:330px;  background-position: center; background-repeat: no-repeat; background-size: cover; ">



<img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$contentCenter->thumbnail}}" alt="Image Description" style=" visibility:hidden;" >

</div>

                        <div class="card-body">
                            <h5 class="mb-0">{{$contentCenter->name}}</h5>
                            <p class="font-size-1 text-body mb-0">{{$contentCenter->desc}}</p>
                        </div>
                    </a>
                </div>
        @endif
        @endforeach
        @endif

        @if($breakingNewsRight->count() == 0)
        {{'Không có bài viết để hiển thị'}}
        @else
        @foreach($breakingNewsRight as $contentRight)

                <div class="js-slide bg-img-hero-center">
                <a class="card h-100 transition-3d-hover" href="{{url('post',$contentRight->slug)}}">
                <div  style=" background-image: url('{{asset('uploads/posts/thumbnail')}}/{{$contentRight->thumbnail}}'); min-height: 230px; max-height:330px; background-position: center; background-repeat: no-repeat; background-size: cover; ">



<img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$contentRight->thumbnail}}" alt="Image Description" style=" visibility:hidden;" >

</div>

                        <div class="card-body">
                            <h5 class="mb-0">{{$contentRight->name}}</h5>
                            <p class="font-size-1 text-body mb-0">{{$contentRight->desc}}</p>
                        </div>
                    </a>
                </div>
                @if($loop->index == 1)
                @break
            @endif
        @endforeach
        @endif


            </div>
        </div>


        <!-- Hien thi slide tren man hinh ipad/laptop -->
        <div class="d-none d-lg-block col-lg-12 space-lg-1">
            <div class="mb-3">
                <h3>TIN THỂ THAO</h3>
            </div>
            <div class="js-slick-carousel slick slick-gutters-1"
                 data-hs-slick-carousel-options='{
       "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-soft-white slick-arrow-left slick-arrow-centered-y rounded-circle ml-sm-2 ml-xl-4\"></span>",
       "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-soft-white slick-arrow-right slick-arrow-centered-y rounded-circle mr-sm-2 mr-xl-4\"></span>",
       "slidesToShow": 5,
       "autoplay": true,
       "autoplaySpeed": 3000,
       "infinite": true,
       "responsive": [{
         "breakpoint": 768,
         "settings": {
           "arrows": true
         }
       }]
     }'>
     @if($getAllSubCate->count() == 0)
     {{"Không có bài viết để hiển thị"}}
     @else

                @foreach($getAllSubCate  as $posts)

                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="{{url('post',$posts->slug)}}" >
                    <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$posts->thumbnail}}" alt="{{$posts->name}}" style="border-top-left-radius: 0rem;border-top-right-radius: 0rem; height: 150px;">
                        <div class="card-body" style="background: #f7f7f7; padding: 0.5rem;">
                            <h5 class="mb-0">{!! Str::limit($posts->name, 45, ' ...') !!}</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                @endforeach
                @endif

                <!-- End -->
            </div>
        </div>



        <!-- Hien thi tren man hinh dien thoai -->
        <div class="d-lg-none col-sm-12 space-1">
            <div class="mb-3">
                <h3>TIN THỂ THAO</h3>
            </div>
            <div class="js-slick-carousel slick slick-gutters-1"
                 data-hs-slick-carousel-options='{
          "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-soft-white slick-arrow-left slick-arrow-centered-y rounded-circle ml-sm-2 ml-xl-4\"></span>",
          "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-soft-white slick-arrow-right slick-arrow-centered-y rounded-circle mr-sm-2 mr-xl-4\"></span>",
          "slidesToShow": 2,
          "autoplay": true,
          "autoplaySpeed": 3000,
          "infinite": true,
          "responsive": [{
            "breakpoint": 768,
            "settings": {
              "arrows": true
            }
          }]
        }'>
        @if($getAllSubCate->count() == 0)
        {{"Không có bài viết để hiển thị"}}
        @else
        @foreach($getAllSubCate as $posts)

                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="{{url('post',$posts->slug)}}">
                        <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$posts->thumbnail}}" alt="{{$posts->name}}" style="border-top-left-radius: 0rem;
               border-top-right-radius: 0rem; height: 200px;">
                        <div class="card-body" style="background: #f7f7f7; padding: 0.5rem;">
                            <h5 class="mb-0">{!! Str::limit($posts->name, 45, ' ...') !!}</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                @endforeach
                @endif
                <!-- End -->
            </div>
        </div>

    </div>
    <!-- End Show Content Bellow Header-->

    <div class="col-lg-12 mb-3">
        <div class="mb-3">
            <h3>TIN GIẢI TRÍ</h3>
        </div>
        <div data-aos="fade-up" class="aos-init aos-animate">
            <div class="row" style="background: rgba(245, 202, 153, 0.1)">
                <div class="col-lg-6 col-md-6 order-md-2 col-sm-12 col-12 order-2 order-lg-2 mb-5 mb-lg-0">
                    <div class="row">
                    @foreach($getSubTinGiaiTri as $subTinGiaiTri)
                        @foreach($subTinGiaiTri->getPosts($subTinGiaiTri->id) as $postOfTinGiaiTri)
                        @if($postOfTinGiaiTri->status != 1)
                        <div class="col-lg-6 col-md-12 mb-md-2 col-sm-12 mb-sm-2 mb-4">
                            <a class="card transition-3d-hover" href="{{url('post',$postOfTinGiaiTri->slug)}}" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                            <div class="card-img-top d-none d-lg-block" style=" background-image: url('{{asset('uploads/posts/thumbnail')}}/{{$postOfTinGiaiTri->thumbnail}}'); min-height: 145px;  max-height: 145px;background-position: center; background-repeat: no-repeat; background-size: cover; ">



<img class="card-img-top d-none d-lg-block" src="{{asset('uploads/posts/thumbnail')}}/{{$postOfTinGiaiTri->thumbnail}}" alt="{{$postOfTinGiaiTri->name}}" style="border-top-left-radius: 0rem;
border-top-right-radius: 0rem; visibility:hidden; ">
</div>




                                <div class="card-body" style="background: rgba(245, 202, 153, 0.1); padding: 4px 4px 4px 4px;">
                                    <h5 class="mb-0"><span class="dot-icon d-lg-none mr-2"></span> {{$postOfTinGiaiTri->name}}</h5>
                                </div>
                            </a>
                        </div>
                            {{-- @if($loop->first)  --}}
                            @if($loop->index == 1)
                            @break
                            @endif
                            @endif
                    @endforeach
                    @endforeach
                </div>
                </div>



                <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-1 order-md-1">
                    <!-- Blog -->
                    @foreach($getSubTinGiaiTri as $subTinGiaiTri)
                    @foreach($subTinGiaiTri->getPosts($subTinGiaiTri->id) as $postOfTinGiaiTri)
                    @if($postOfTinGiaiTri->status != 1)
                        <article>
                        <a class="card align-items-start flex-wrap flex-row h-380rem gradient-x-overlay-sm-navy bg-img-hero transition-3d-hover mb-1" href="{{url('post',$postOfTinGiaiTri->slug)}}" style="background-image: url({{asset('uploads/posts/thumbnail')}}/{{$postOfTinGiaiTri->thumbnail}});">
                            <div class="card-footer border-0 bg-transparent mt-auto">
                            <h3 class="h2 text-white">{{$postOfTinGiaiTri->name}}</h3>
                            </div>
                        </a>
                    </article>
                    @endif
                    @if ($loop->first)
                    @break
                    @endif

                    @endforeach
                    @if($loop->index == 1)
                    @break
                    @endif


                    @endforeach
                    <!-- End Blog -->
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-lg-between">
        <div class="col-lg-8">
            <div class="mb-3">
                <h3>TIN TỔNG HỢP</h3>
            </div>
            <!-- Card -->
            @if($tinTongHop->count() == 0)
            {{"Không có bài viết để hiển thị"}}
            @else
            @foreach($tinTongHop as $postTinTH)
            <div class="row mb-2 pb-2 border-bottom">
                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0">
                    <div class="position-relative">
                        <a href="course-description.html">

                            <div style=" background-image: url('{{asset('uploads/posts/thumbnail')}}/{{$postTinTH->thumbnail}}'); min-height: 150px;  max-height: 120px;background-position: center; background-repeat: no-repeat; background-size: cover; ">

                        <img class="img-fluid w-100" src="{{asset('uploads/posts/thumbnail')}}/{{$postTinTH->thumbnail}}" alt="Image Description" style="border-radius: 0rem; visibility:hidden; ">
                           </div>
                        </a>
                    </div>
                </div>
                <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="media mb-2">
                        <div class="media-body">
                        <a href="{{url('post',$postTinTH->slug)}}"><h3 class="h4 text-hover-primary mb-0" >{{$postTinTH->name}}</h3></a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center small text-muted">
                        <div class="d-inline-block mr-2">
                            {{$postTinTH->created_at->diffForHumans($dateTime)}}
                        </div>
                        <div class="d-inline-block mr-2">
                            @foreach($postTinTH->Categories as $categoryTH)
                        <a style="color: #333;" href="{{url('category',$categoryTH->slug)}}">{{$categoryTH->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">
                        {!! Str::limit($postTinTH->desc, 200, ' ...') !!}</p>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <!-- Sticky Block End Point -->
        <div id="stickyBlockEndPoint"></div>

        <div class="col-lg-3">

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
                        <h3>Đang Được Quan Tâm</h3>
                    </div>

                    <!-- Blog -->
                    @if($hotPosts->count()== 0)
                    {{"Không có bài viết để hiện thị"}}
                    @else
                    @foreach($hotPosts as $hotPost)
                    <article class="mb-5">
                        <div class="media align-items-center text-inherit">
                            <div class="avatar avatar-lg mr-3">
                            <img class="avatar-img" src="{{asset('uploads/posts/thumbnail')}}/{{$hotPost->thumbnail}}" alt="{{$hotPost->slug}}">
                            </div>
                            <div class="media-body">
                            <h4 class="h6 mb-0"><a class="text-inherit" href="{{url('post',$hotPost->slug)}}">{{$hotPost->slug}}</a></h4>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    @endif
                    <!-- End Blog -->
                </div>

            </div>
        </div>

        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <h3>XUẤT BẢN</h3>
                    </div>
                    @if($firstXuatBan->count() == 0)
                    {{"Không có bài viết để hiển thị"}}
                    @else
                    <article class="card border-bottom" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                        <div class="card-img-top position-relative">
                        <div style=" background-image: url('{{asset('uploads/posts/thumbnail')}}/{{$firstXuatBan->thumbnail}}'); min-height: 170px;  max-height: 250px;background-position: center; background-repeat: no-repeat; background-size: cover; ">


<img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$firstXuatBan->thumbnail}}" alt="{{$firstXuatBan->name}}" style="border-top-left-radius: 0rem;
                  border-top-right-radius: 0rem;  visibility:hidden; ">
   </div>

                        </div>
                        <div class="card-body" style="padding: 0.5rem;">
                            <h4 class="h5"><a class="text-inherit" href="{{url('post',$firstXuatBan->slug)}}">{{$firstXuatBan->name}}</a></h4>
                        </div>
                    </article>
                    @endif

                    @foreach($lastXuatBan as $postXuatBan)
                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="{{url('post',$postXuatBan->slug)}}">
                                <img class="img-fluid w-100" src="{{asset('uploads/posts/thumbnail')}}/{{$postXuatBan->thumbnail}}" alt="{{$postXuatBan->name}}" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="{{url('post',$postXuatBan->slug)}}"><h4 class="h6 text-hover-primary mb-0">{{$postXuatBan->name}}</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                 <!-- End Xuất Bản  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <h3>SÁCH HAY</h3>
                    </div>
                    @if($firstSachHay->count() == 0)
                    {{"Không có bài viết để hiển thị"}}
                    @else
                    <article class="card border-bottom" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                        <div class="card-img-top position-relative">


                    <div style=" background-image: url('{{asset('uploads/posts/thumbnail')}}/{{$firstSachHay->thumbnail}}'); min-height: 170px;  max-height: 250px;background-position: center; background-repeat: no-repeat; background-size: cover; ">



                       <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$firstSachHay->thumbnail}}" alt="{{$firstSachHay->name}}" style="border-top-left-radius: 0rem;
                  border-top-right-radius: 0rem;  visibility:hidden;">
   </div>
                        </div>
                        <div class="card-body" style="padding: 0.5rem;">
                            <h4 class="h5"><a class="text-inherit" href="{{url('post',$firstSachHay->slug)}}">{{$firstSachHay->name}}</a></h4>
                        </div>
                    </article>
                    @endif

                    @foreach($lastSachHay as $postSachHay)
                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="{{url('post',$postSachHay->slug)}}">
                                <img class="img-fluid w-100" src="{{asset('uploads/posts/thumbnail')}}/{{$postSachHay->thumbnail}}" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                <a href="{{url('post',$postSachHay->slug)}}"><h4 class="h6 text-hover-primary mb-0">
                                    {{$postSachHay->name}}</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- End Sách Hay  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <h3>TÁC GIẢ</h3>
                    </div>
                    @if($firstTacGia->count() == 0)
                    {{"Không có bài viết để hiển thị"}}
                    @else
                    <article class="card border-bottom" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                        <div class="card-img-top position-relative">
                        <div style=" background-image: url('{{asset('uploads/posts/thumbnail')}}/{{$firstTacGia->thumbnail}}'); min-height: 170px;  max-height: 250px;background-position: center; background-repeat: no-repeat; background-size: cover; ">




       <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$firstTacGia->thumbnail}}" alt="{{$firstTacGia->name}}" style="border-top-left-radius: 0rem;
                  border-top-right-radius: 0rem;  visibility:hidden;">
</div>

                        </div>
                        <div class="card-body" style="padding: 0.5rem;">
                            <h4 class="h5"><a class="text-inherit" href="{{url('post',$firstTacGia->slug)}}">{{$firstTacGia->name}}</a></h4>
                        </div>
                    </article>
                    @endif

                    @foreach($lastTacGia as $postTacGia)
                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="{{url('post',$postTacGia->slug)}}">
                                    <img class="img-fluid w-100" src="{{asset('uploads/posts/thumbnail')}}/{{$postTacGia->thumbnail}}" alt="{{$postTacGia->name}}" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="{{url('post',$postTacGia->slug)}}"><h4 class="h6 text-hover-primary mb-0">
                                        {{$postTacGia->name}}</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                 <!-- End Tác Giả  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <h3>THẾ GIỚI</h3>
                    </div>
                    @if($firstTacGia->count() == 0)
                    {{"Không có bài viết để hiển thị"}}
                    @else
                    <article class="card border-bottom" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                        <div class="card-img-top position-relative">
                        <div style=" background-image: url('{{asset('uploads/posts/thumbnail')}}/{{$firstTheGioi->thumbnail}}'); min-height: 170px;  max-height: 250px;background-position: center; background-repeat: no-repeat; background-size: cover; ">


                        <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$firstTheGioi->thumbnail}}" alt="{{$firstTheGioi->name}}" style="border-top-left-radius: 0rem;
                  border-top-right-radius: 0rem; visibility:hidden;">


</div>


                        </div>
                        <div class="card-body" style="padding: 0.5rem;">
                            <h4 class="h5"><a class="text-inherit" href="{{url('post',$firstTheGioi->slug)}}">{{$firstTheGioi->name}}</a></h4>
                        </div>
                    </article>
                    @endif
                    @foreach($lastTheGioi as $postTheGioi)
                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="{{url('post',$postTheGioi->thumbnail)}}">
                                    <img class="img-fluid w-100" src="{{asset('uploads/posts/thumbnail')}}/{{$postTheGioi->thumbnail}}" alt="{{$postTheGioi->name}}" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                <a href="{{url('post',$postTheGioi->thumbnail)}}"><h4 class="h6 text-hover-primary mb-0">
                                        {{$postTheGioi->name}}</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                 <!-- End Thế Giới  -->

            </div>
        </div>
    </div>
@endsection
