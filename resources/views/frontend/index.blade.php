
@extends('frontend.layouts.index')

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

        <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem" style="background-image: url(https://static.thebristolcable.org/uploads/2016/04/07-cover-1900x1080.jpg);">
            <!-- News Block -->
            <div class="container d-flex align-items-center min-h-620rem">
                <div class="w-lg-40 mr-5">
                    <!-- Author -->
                    <div class="media align-items-center mb-3"
                         data-hs-slick-carousel-animation="fadeInUp">
                        <div class="avatar avatar-sm avatar-circle mr-3">
                            <img class="avatar-img" src="../../../../assets//img/100x100/img10.jpg" alt="Image Description">
                        </div>
                        <div class="media-body">
                            <a class="text-white" href="single-article.html">Christina Kray</a>
                        </div>
                    </div>
                    <!-- End Author -->

                    <div class="mb-5">
                        <h3 class="h1 font-weight-bold text-white"
                            data-hs-slick-carousel-animation="fadeInUp"
                            data-hs-slick-carousel-animation-delay="150">Front Interview with a Lead Designer of the Hubble</h3>
                    </div>
                    <a class="btn btn-primary btn-wide transition-3d-hover" href="single-article.html"
                       data-hs-slick-carousel-animation="fadeInUp"
                       data-hs-slick-carousel-animation-delay="300">Read Article <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
            </div>
            <!-- End News Block -->
        </div>

        <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem" style="background-image: url(https://wallpapercave.com/wp/wp1923873.jpg);">
            <!-- News Block -->
            <div class="container d-flex align-items-center min-h-620rem">
                <div class="w-lg-40 mr-5">
                    <!-- Author -->
                    <div class="media align-items-center mb-3"
                         data-hs-slick-carousel-animation="fadeInUp">
                        <div class="avatar avatar-sm avatar-circle mr-3">
                            <img class="avatar-img" src="../../../../assets//img/100x100/img10.jpg" alt="Image Description">
                        </div>
                        <div class="media-body">
                            <a class="text-white" href="single-article.html">Christina Kray</a>
                        </div>
                    </div>
                    <!-- End Author -->

                    <div class="mb-5">
                        <h2 class="h1 font-weight-bold text-white"
                            data-hs-slick-carousel-animation="fadeInUp"
                            data-hs-slick-carousel-animation-delay="150">Front Corporate - let's work together</h2>
                    </div>
                    <a class="btn btn-primary btn-wide transition-3d-hover" href="single-article.html"
                       data-hs-slick-carousel-animation="fadeInUp"
                       data-hs-slick-carousel-animation-delay="300">Read Article <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
            </div>
            <!-- End News Block -->
        </div>

        <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem" style="background-image: url(https://www.beltandroad.news/wp-content/uploads/2019/10/388273782-1900x1080.jpg);">
            <!-- News Block -->
            <div class="container d-flex align-items-center min-h-620rem">
                <div class="w-lg-40 mr-5">
                    <div class="mb-7">
                        <!-- Author -->
                        <div class="media align-items-center mb-3"
                             data-hs-slick-carousel-animation="fadeInUp">
                            <div class="avatar avatar-sm avatar-circle mr-3">
                                <img class="avatar-img" src="../../../../assets//img/100x100/img4.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <a class="text-white" href="single-article.html">Jeff Fisher</a>
                            </div>
                        </div>
                        <!-- End Author -->

                        <h1 class="font-weight-bold text-white"
                            data-hs-slick-carousel-animation="fadeInUp"
                            data-hs-slick-carousel-animation-delay="150">How Google Assistant now helps you record stories</h1>
                    </div>
                    <a class="btn btn-primary btn-wide transition-3d-hover" href="single-article.html"
                       data-hs-slick-carousel-animation="fadeInUp"
                       data-hs-slick-carousel-animation-delay="300">Read Article <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
            </div>
            <!-- End News Block -->
        </div>
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
                <div class="js-slide my-3">
                    <span class="text-white">Front Interview with a Lead Designer of the Hubble</span>

                    <span class="slick-pagination-line-progress">
              <span class="slick-pagination-line-progress-helper"></span>
            </span>
                </div>
                <div class="js-slide my-3">
                    <span class="text-white">Front Corporate - let's work together</span>

                    <span class="slick-pagination-line-progress">
              <span class="slick-pagination-line-progress-helper"></span>
            </span>
                </div>
                <div class="js-slide my-3">
                    <span class="text-white">How Google Assistant now helps you record stories</span>

                    <span class="slick-pagination-line-progress">
              <span class="slick-pagination-line-progress-helper"></span>
            </span>
                </div>
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
            @if(empty($breakingNewsLeft) == true)
            {{'Không có bài viết để hiển thị'}}  
            @else
            @foreach($breakingNewsLeft as $contentsLeft)
            <article class="mb-3 pb-3 border-bottom">
                <div class="media  text-inherit">
                    <div class="avatar avatar-lg mr-3">
                    <img class="avatar-img" src="{{asset('uploads/posts/thumbnail')}}/{{$contentsLeft->thumbnail}}" alt="Image Description" style="border-radius: 0rem;">
                    </div>
                    <div class="media-body">
                        <h4 class="h6 mb-0"><a class="text-inherit" href="{{url('post',$contentsLeft->slug)}}">{{$contentsLeft->name}}</a></h4>
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
            @if(empty($breakingNewsCenter) == true)
            {{'Không có bài viết để hiển thị'}}
            @else 
            @foreach($breakingNewsCenter as $postCenter)
                @if($loop->first)
                <article class="card" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1)">
                <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$postCenter->thumbnail}}" alt="Image Description">
                <div class="card-body" style="padding: 0.3rem;">
                    <h2 class="h3"><a class="text-inherit" href="{{url('post',$postCenter->slug)}}">{{$postCenter->name}}</a></h2>
                    <p>{{$postCenter->desc}}</p>
                </div>
                </article>
                @endif
            @endforeach
            @endif
        </div>

        <div class="col-lg-3 col-md-5 d-none d-lg-block">
            @if(empty($breakingNewsRight) == true)
            {{'Không có bài viết để hiển thị'}}
            @else 
            @foreach($breakingNewsRight as $postRight) 
            <article class="card" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1)">
                <div class="card-img-top">
                <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$postRight->thumbnail}}" alt="Image Description">
                </div>
                <div class="card-body" style="padding: 0.1rem;">
                    <h5><a class="text-inherit" href="{{url('post',$postRight->slug)}}">{{$postRight->name}}</a></h5>
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
        @if(empty($breakingNewsLeft) == true)
        {{'Không có bài viết để hiển thị'}}  
        @else
        @foreach($breakingNewsLeft as $contentsLeft)
                <div class="js-slide bg-img-hero-center">
                <a class="card h-100 transition-3d-hover" href="{{url('post',$contentsLeft->slug)}}">
                    <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$contentsLeft->thumbnail}}" alt="Image Description">
                        <div class="card-body">
                            <h5 class="mb-0">{{$contentsLeft->name}}</h5>
                            <p class="font-size-1 text-body mb-0">{{$contentsLeft->desc}}</p>
                        </div>
                    </a>
                </div>
        @endforeach
        @endif

        @if(empty($breakingNewsCenter) == true)
        {{'Không có bài viết để hiển thị'}}  
        @else
        @foreach($breakingNewsCenter as $contentCenter)
        @if($loop->first)
                <div class="js-slide bg-img-hero-center">
                <a class="card h-100 transition-3d-hover" href="{{url('post',$contentCenter->slug)}}">
                    <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$contentCenter->thumbnail}}" alt="Image Description">
                        <div class="card-body">
                            <h5 class="mb-0">{{$contentCenter->name}}</h5>
                            <p class="font-size-1 text-body mb-0">{{$contentCenter->desc}}</p>
                        </div>
                    </a>
                </div>
        @endif
        @endforeach
        @endif

        @if(empty($breakingNewsRight) == true)
        {{'Không có bài viết để hiển thị'}}  
        @else
        @foreach($breakingNewsRight as $contentRight)

                <div class="js-slide bg-img-hero-center">
                <a class="card h-100 transition-3d-hover" href="{{url('post',$contentRight->slug)}}">
                    <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$contentRight->thumbnail}}" alt="Image Description">
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
    
                @foreach($getAllSubCate as $subCate)
                @foreach($subCate->getPosts($subCate->id) as $posts)
                
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="{{url('post',$posts->slug)}}" >
                    <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$posts->thumbnail}}" alt="{{$posts->name}}" style="border-top-left-radius: 0rem;border-top-right-radius: 0rem; height: 150px;">
                        <div class="card-body" style="background: #f7f7f7; padding: 0.5rem;">
                            <h5 class="mb-0">{{$posts->name}}</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                @if($loop->index == 9)
                    @break
                @endif
                @endforeach
                @endforeach
                
                <!-- End -->
            </div>
        </div>



        <!-- Hien thi tren man hinh dien thoai -->
        <div class="d-lg-none col-sm-12 space-1">
            <div class="mb-3">
                <h3>TIN TỔNG HỢP</h3>
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

        @foreach($getAllSubCate as $subCate)
                @foreach($subCate->getPosts($subCate->id) as $posts)
                
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="{{url('post',$posts->slug)}}">
                        <img class="card-img-top" src="{{asset('uploads/posts/thumbnail')}}/{{$posts->thumbnail}}" alt="{{$posts->name}}" style="border-top-left-radius: 0rem;
               border-top-right-radius: 0rem; height: 200px;">
                        <div class="card-body" style="background: #f7f7f7; padding: 0.5rem;">
                            <h5 class="mb-0">{{$posts->name}}</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                @if($loop->index == 9)
                    @break
                @endif
                @endforeach
                @endforeach
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
                        <div class="col-lg-6 col-md-12 mb-md-2 col-sm-12 mb-sm-2 mb-4">
                            <a class="card transition-3d-hover" href="{{url('post',$postOfTinGiaiTri->slug)}}" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                            <img class="card-img-top d-none d-lg-block" src="{{asset('uploads/posts/thumbnail')}}/{{$postOfTinGiaiTri->thumbnail}}" alt="{{$postOfTinGiaiTri->name}}" style="border-top-left-radius: 0rem;
                      border-top-right-radius: 0rem; ">
                                <div class="card-body" style="background: rgba(245, 202, 153, 0.1); padding: 4px 4px 4px 4px;">
                                    <h5 class="mb-0"><span class="dot-icon d-lg-none mr-2"></span> {{$postOfTinGiaiTri->name}}</h5>
                                </div>
                            </a>
                        </div>
                            {{-- @if($loop->first)  --}}
                            @if($loop->index == 1) 
                            @break
                            @endif  
                    @endforeach
                    @endforeach
                </div>
                </div>



                <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-1 order-md-1">
                    <!-- Blog -->
                    @foreach($getSubTinGiaiTri as $subTinGiaiTri)
                        @foreach($subTinGiaiTri->getPosts($subTinGiaiTri->id) as $postOfTinGiaiTri)
                        <article>
                        <a class="card align-items-start flex-wrap flex-row h-380rem gradient-x-overlay-sm-navy bg-img-hero transition-3d-hover mb-1" href="{{url('post',$postOfTinGiaiTri->slug)}}" style="background-image: url({{asset('uploads/posts/thumbnail')}}/{{$postOfTinGiaiTri->thumbnail}});">
                            <div class="card-footer border-0 bg-transparent mt-auto">
                            <h3 class="h2 text-white">{{$postOfTinGiaiTri->name}}</h3>
                            </div>
                        </a>
                    </article>    
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
            @foreach($tinTongHop as $postTinTH)
            <div class="row mb-2 pb-2 border-bottom">
                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0">
                    <div class="position-relative">
                        <a href="course-description.html">
                            <img class="img-fluid w-100" src="{{asset('uploads/posts/thumbnail')}}/{{$postTinTH->thumbnail}}" alt="Image Description" style="border-radius: 0rem;">
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
                            {{$dateTime->diffForHumans($postTinTH->created_at)}}
                        </div>
                        <div class="d-inline-block mr-2">
                            @foreach($postTinTH->Categories as $categoryTH)
                        <a style="color: #333;" href="{{$categoryTH->slug}}">{{$categoryTH->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">
                    {{$postTinTH->desc}}</p>
                </div>
            </div>
            @endforeach
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
                        <h3>Front culture</h3>
                    </div>

                    <!-- Blog -->
                    <article class="mb-5">
                        <div class="media align-items-center text-inherit">
                            <div class="avatar avatar-lg mr-3">
                                <img class="avatar-img" src="../../../../assets//img/320x320/img1.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <h4 class="h6 mb-0"><a class="text-inherit" href="#">Announcing a free plan for small teams</a></h4>
                            </div>
                        </div>
                    </article>
                    <!-- End Blog -->

                    <!-- Blog -->
                    <article class="mb-5">
                        <div class="media align-items-center text-inherit">
                            <div class="avatar avatar-lg mr-3">
                                <img class="avatar-img" src="../../../../assets//img/320x320/img10.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <h4 class="h6 mb-0"><a class="text-inherit" href="#">Mapping the first family tree for Front office</a></h4>
                            </div>
                        </div>
                    </article>
                    <!-- End Blog -->

                    <!-- Blog -->
                    <article class="mb-5">
                        <div class="media align-items-center text-inherit">
                            <div class="avatar avatar-lg mr-3">
                                <img class="avatar-img" src="../../../../assets//img/320x320/img9.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <h4 class="h6 mb-0"><a class="text-inherit" href="#">Felline eyeing first major Classic win in 2018</a></h4>
                            </div>
                        </div>
                    </article>
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
                    <article class="card border-bottom" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/piqbzcvo/2020_11_11/avd2_1592382028933928334407.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
                  border-top-right-radius: 0rem;">
                        </div>
                        <div class="card-body" style="padding: 0.5rem;">
                            <h4 class="h5"><a class="text-inherit" href="single-article.html">Những bảo bối nào thường xuyên được Doraemon sử dụng?</a></h4>
                        </div>
                    </article>

                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_10/44043524_1903944283234338_6629408168860450816_n.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Khoảng trống sách nghệ thuật</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/piqbzcvo/2020_10_29/dan_quan.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Cuộc sống tại Hà Nội những năm 1967 đến 1975</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/jugtzb/2020_10_27/N23.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Đà Nẵng cấm tàu thuyền ra khơi</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <h3>SÁCH HAY</h3>
                    </div>
                    <article class="card border-bottom" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_11/ly_thanh_co_elle_man_feature.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
                  border-top-right-radius: 0rem;">
                        </div>
                        <div class="card-body" style="padding: 0.5rem;">
                            <h4 class="h5"><a class="text-inherit" href="single-article.html">'Trăng mật với bản thân' - bí quyết sống hạnh phúc của người độc thân</a></h4>
                        </div>
                    </article>

                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/dqmblcvo/2020_11_07/SachSG1.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Phố heo may về</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/mdf_fedrei/2020_11_10/gia_tri_cua_su_tu_te_2.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Nuôi dưỡng sự tử tế để chữa lành tâm hồn</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/jugtzb/2020_10_27/N23.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Đà Nẵng cấm tàu thuyền ra khơi</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <h3>TÁC GIẢ</h3>
                    </div>
                    <article class="card border-bottom" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_10_26/thumb_R.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
                  border-top-right-radius: 0rem;">
                        </div>
                        <div class="card-body" style="padding: 0.5rem;">
                            <h4 class="h5"><a class="text-inherit" href="single-article.html">Bức tranh cuộc đời trong 'Bệnh vẩy nến nơi vĩnh hằng'</a></h4>
                        </div>
                    </article>

                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/bpcpwiq2/2020_11_07/Di_tron_202011_Quynh_Tram_7_.JPG" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Tiểu thuyết mới của Bình Ca không có đánh lộn và yêu đương</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_09/Hoc_tro.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Mối tình đầu</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/jugtzb/2020_10_27/N23.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Đà Nẵng cấm tàu thuyền ra khơi</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <h3>XÃ HỘI</h3>
                    </div>
                    <article class="card border-bottom" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/pgi_qvradhnat/2020_11_11/thumb_hue.jpeg" alt="Image Description" style="border-top-left-radius: 0rem;
                  border-top-right-radius: 0rem;">
                        </div>
                        <div class="card-body" style="padding: 0.5rem;">
                            <h4 class="h5"><a class="text-inherit" href="single-article.html">Người Huế đưa ôtô, xe máy lên cầu tránh lũ</a></h4>
                        </div>
                    </article>

                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/qhj_dvoahficbu/2020_11_12/uuu.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Chưa tăng lương để dành tiền chống dịch, khắc phục hậu quả thiên tai</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/jugtzb/2020_10_27/N23.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Đà Nẵng cấm tàu thuyền ra khơi</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/jugtzb/2020_10_27/N23.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Đà Nẵng cấm tàu thuyền ra khơi</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
