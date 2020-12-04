<!DOCTYPE html>
<html lang="en">
<!--  -->
<head>
    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og-title')">
    <meta property="og:image" content="@yield('og-image')">
    <meta property="og:description" content="@yield('og-description')">
    <meta property="og:url" content="@yield('og-url')">
    <meta property="fb:app_id" content="416800552839762">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/favicon.ico')}}">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">
    <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>


</head>

<body>

<script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '{your-app-id}',
        cookie     : true,
        xfbml      : true,
        version    : '{api-version}'
      });

      FB.AppEvents.logPageView();

    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "https://connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>
<!-- ========== HEADER ========== -->
<header id="header" class="header left-aligned-navbar">

    <div class="header-section">
        <div id="logoAndNav" class="container mt-lg-n2">
            <!-- Nav -->

            <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
                <div class="navbar-nav-wrap">
                      <!-- Logo -->
                      <a class="navbar-brand navbar-nav-wrap-brand" href="{{route('home')}}" aria-label="Front">
                        <img src="{{asset('frontend/assets/svg/logos/logo.png')}}" alt="Logo">
                      </a>
                      <!-- End Logo -->

                      <!-- Secondary Content -->
                      <div class="navbar-nav-wrap-content">
                        <!-- Search Classic -->
                        <div class="hs-unfold d-lg-none d-inline-block position-static">
                          <a class="js-hs-unfold-invoker btn btn-xs btn-icon rounded-circle" href="javascript:;"
                             data-hs-unfold-options='{
                              "target": "#searchClassic",
                              "type": "css-animation",
                              "animationIn": "slideInUp"
                             }'>
                            <i class="fas fa-search"></i>
                          </a>

                          <div id="searchClassic" class="hs-unfold-content dropdown-menu w-100 border-0 rounded-0 px-3 mt-0">
                          <form method="POST" action="{{route('search.index')}}" class="input-group input-group-sm input-group-merge">
                             @csrf
                            <input type="text" name="key" class="form-control" placeholder="Bạn muốn tìm kiếm?" aria-label="Bạn muốn tìm kiếm?">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <i class="fas fa-search"></i>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <!-- End Search Classic -->

                        <!-- Account -->
                        @if(Auth::user())
                        <div class="hs-unfold">

                          <a class="js-hs-unfold-invoker rounded-circle" href="javascript:;"
                             data-hs-unfold-options='{
                              "target": "#accountDropdown",
                              "type": "css-animation",
                              "event": "hover",
                              "duration": 50,
                              "delay": 0,
                              "hideOnScroll": "true"
                             }'>
                            <span class="avatar avatar-xs avatar-circle">
                              <img class="avatar-img w-100" src="{{asset('uploads/users')}}/{{Auth::user()->thumbnail}}" alt="Image Description">
                            </span>
                          </a>

                          <div id="accountDropdown" class="hs-unfold-content dropdown-menu dropdown-menu-sm-right dropdown-menu-no-border-on-mobile p-0" style="min-width: 245px;">
                            <div class="card">
                              <!-- Header -->
                              <div class="card-header p-4">
                                <a class="media align-items-center" href="#">
                                  <div class="avatar mr-3">
                                  <img class="avatar-img w-100" src="{{asset('uploads/users')}}/{{Auth::user()->thumbnail}}" alt="Image Description">
                                  </div>
                                  <div class="media-body">
                                    <span class="d-block font-weight-bold">{{Auth::user()->fullname}} <span class="badge badge-success ml-1">@foreach(Auth::user()->Roles as $role) {{$role->name}} @endforeach</span></span>
                                    <span class="d-block small text-muted">{{Auth::user()->email}}</span>
                                  </div>
                                </a>
                              </div>
                              <!-- End Header -->

                              <!-- Body -->
                              <div class="card-body py-3">

                              <a class="dropdown-item px-0" href="{{url('user', Auth::user()->username)}}">
                                  <span class="dropdown-item-icon">
                                    <i class="fas fa-user"></i>
                                  </span>
                                 Thông tin tài khoản
                                </a>
                                @foreach(Auth::user()->Roles as $role)
                          @if($role->id == 1 || $role->id == 2)
                          <a class="dropdown-item px-0" href="{{url('panel')}}">
                            <span class="dropdown-item-icon">
                              <i class="fas fa-cogs"></i>
                            </span>
                            Quản lý hệ thống
                          </a>
                          @endif
                          @if($role->id == 3)
                          <a class="dropdown-item px-0" href="{{url('panel')}}">
                            <span class="dropdown-item-icon">
                              <i class="fas fa-pen"></i>
                            </span>
                            Viết bài
                          </a>
                          @endif
                          @endforeach
                                <a class="dropdown-item px-0" href="#">
                                  <span class="dropdown-item-icon">
                                    <i class="fas fa-credit-card"></i>
                                  </span>
                                  Nhuận bút
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item px-0" href="#">
                                  <span class="dropdown-item-icon">
                                    <i class="fas fa-question-circle"></i>
                                  </span>
                                  Hỏi đáp
                                </a>
                                <a class="dropdown-item px-0" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                  <span class="dropdown-item-icon">
                                    <i class="fas fa-power-off"></i>
                                  </span>
                                  Đăng xuất
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                                </a>
                              </div>
                              <!-- End Body -->
                            </div>
                          </div>
                        </div>
                        @else
                        <div class="hs-unfold">
                          <li class="list-inline-item">
                              <div class="hs-unfold">
                              <a class="btn btn-sm btn-primary d-none d-lg-inline-block" href="{{route('login')}}">Đăng nhập</a>
                              <a class="btn btn-sm btn-primary d-none d-lg-inline-block" href="{{route('register')}}">Đăng ký</a>
                              </div>
                            </li></div>
                          @endif
                        <!-- End Account -->
                      </div>
                      <!-- End Secondary Content -->

                      <!-- Responsive Toggle Button -->
                      <button type="button" class="navbar-toggler navbar-nav-wrap-navbar-toggler btn btn-icon btn-sm rounded-circle"
                              aria-label="Toggle navigation"
                              aria-expanded="false"
                              aria-controls="navBar"
                              data-toggle="collapse"
                              data-target="#navBar">
                        <span class="navbar-toggler-default">
                          <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
                          </svg>
                        </span>
                        <span class="navbar-toggler-toggled">
                          <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
                          </svg>
                        </span>
                      </button>
                      <!-- End Responsive Toggle Button -->

                      <!-- Navigation -->
                      <div id="navBar" class="navbar-nav-wrap-navbar collapse navbar-collapse">
                        <ul class="navbar-nav">
                          <!-- Courses -->
                          <li class="hs-has-sub-menu navbar-nav-item">
                            <a id="coursesMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="coursesSubMenu">
                              <i class="fa fa-th font-size-1 mr-1"></i>
                              Danh mục
                            </a>

                            <!-- Courses - Submenu -->
                            <div id="coursesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="coursesMegaMenu" style="min-width: 270px;">
                              <!-- Development -->
                              @foreach($categoriesMenu as $categoryParent)
                              <div class="hs-has-sub-menu">
                              <a id="navLink-{{$categoryParent->id}}" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="{{url('category',$categoryParent->slug)}}" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenu-{{$categoryParent->id}}">
                                  <span class="min-w-4rem text-center opacity-lg mr-1">

                                  </span>
                                  {{$categoryParent->name}}
                              </a>

                                  @if(count($categoryParent->categories))
                                  <div id="navSubmenu-{{$categoryParent->id}}" class="hs-sub-menu dropdown-menu" aria-labelledby="navLink-{{$categoryParent->id}}" style="min-width: 270px;">
                                          @foreach($categoryParent->categories as $subcategory)
                                          <a class="dropdown-item" href="{{url('category',$subcategory->slug)}}">{{$subcategory->name}}</a>
                                          @endforeach
                                   </div>

                                  @else
                                  <div class="hs-sub-menu" style="min-width: 270px;"></div>
                                  @endif
                              </div>
                              @endforeach
                              <!-- End Development -->
                              <div class="dropdown-divider my-3"></div>

                              <div class="px-4">
                                <a class="btn btn-block btn-sm btn-primary transition-3d-hover" href="courses-listing.html">All Courses</a>
                              </div>
                            </div>
                            <!-- End Courses - Submenu -->
                          </li>
                          <!-- End Courses -->

                          <!-- Search Form -->
                          <li class="d-none d-lg-inline-block navbar-nav-item flex-grow-1 mx-2">

                            <form method="GET" action="{{route('search.index')}}"  class="input-group input-group-sm input-group-merge w-75">
                              @csrf
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fa fa-search"></i>
                                </div>
                              </div>
                              <input type="text" name="key" class="form-control" placeholder="Bạn muốn tìm kiếm?" aria-label="Bạn muốn tìm kiếm?">
                            </form>
                          </li>
                          <!-- End Search Form -->

                          <!-- Pages -->
                          <li class="hs-has-sub-menu navbar-nav-item mr-lg-auto">
                            <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Trang</a>

                            <!-- Pages - Submenu -->
                            <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                            <a class="dropdown-item" href="{{url('/frontend/contact')}}">Liên Hệ</a>
                              <a class="dropdown-item" href="{{url('/frontend/term')}}">Điều khoản</a>
                              <a class="dropdown-item" href="{{url('/frontend/faq')}}">Hỏi đáp</a>
                            </div>
                            <!-- End Pages - Submenu -->
                          </li>
                          <!-- End Pages -->

                          <!-- My Courses -->
                          @if(Auth::user())
                          <li class="hs-has-mega-menu navbar-nav-item d-none d-lg-inline-block"
                              data-hs-mega-menu-item-options='{
                                "desktop": {
                                  "position": "right",
                                  "maxWidth": "350px"
                                }
                              }'>
                            <a id="myCoursesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Thông báo</a>

                            <!-- My Courses - Submenu -->
                            <div class="hs-mega-menu dropdown-menu" aria-labelledby="myCoursesMegaMenu">
                              <div class="card">
                                <div class="card-header py-3">
                                  <span class="text-dark font-weight-bold">Thông báo của tôi</span>
                                </div>

                                <div class="card-body" style="padding-top: 0.5rem;">
                                  <div class="text-center">
                                    <ul class="nav nav-segment nav-pills scrollbar-horizontal" role="tablist" style="padding-bottom: .5rem;">
                                      <li class="nav-item">
                                        <a class="nav-link active" style="padding-top: 0rem; padding-bottom: 0rem;" id="pills-one-code-features-example1-tab" data-toggle="pill" href="#pills-one-code-features-example1" role="tab" aria-controls="pills-one-code-features-example1" aria-selected="true">Bài mới</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" style="padding-top: 0rem; padding-bottom: 0rem;" id="pills-two-code-features-example1-tab" data-toggle="pill" href="#pills-two-code-features-example1" role="tab" aria-controls="pills-two-code-features-example1" aria-selected="false">Cá nhân</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" style="padding-top: 0rem; padding-bottom: 0rem;" id="pills-three-code-features-example1-tab" data-toggle="pill" href="#pills-three-code-features-example1" role="tab" aria-controls="pills-three-code-features-example1" aria-selected="false">Bình luận</a>
                                      </li>
                                    </ul>
                                  </div>
                                  <!-- End Nav -->
                                  
                                  <!-- Tab Content -->
                                  <div class="tab-content">
                                    <div class="tab-pane fade show active" id="pills-one-code-features-example1" role="tabpanel" aria-labelledby="pills-one-code-features-example1-tab">
                              @if($notificationsPosting->count() == 0)
                                {{"Chưa có thông báo mới"}}
                               @else
                              @foreach($notificationsPosting as $notif)
                               @if(isset($notif->author_id))
                               @foreach(App\Models\Followers::where('user_id', '=', $notif->user_id)->get() as $userFollowing)
                                @if($userFollowing->user_id == Auth::user()->id && $userFollowing->author_id == $notif->author_id)
                               {{-- @if($userFollowing->user_id == Auth::user()->id && $notif->author_id == $userFollowing->author_id) --}}
                                <div class="media border-bottom" href="javascript:;">
                                  <div class="mt-1 mr-3">
                                    <div class="avatar">
                                      <img class="avatar-img rounded-sm" src="{{asset('frontend/assets/svg/components/graphics-8.svg')}}" alt="Image Description">
                                    </div>
                                  </div>
                                  <div class="media-body">
                                    <div class="mb-2">
                                    <span class="d-block text-dark text-hover-primary font-size-1 font-weight-bold mb-1">
                                      {{$notif->Reporter->fullname}} vừa ra bài viết
                                      "<a class="text-dark" href="{{url('post',$notif->Post->slug)}}">{{Illuminate\Support\Str::limit($notif->Post->name, $limit = 50, $end = '...') }}</a>"
                                    </span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                    </div>
                                  </div>
                                </div>
                                @endif
                                @endforeach
                                @if($loop->index == 4)
                                @break
                                @endif
                                @endif
                                @endforeach
                                @endif
                                    </div>
                                  
                                    <div class="tab-pane fade" id="pills-two-code-features-example1" role="tabpanel" aria-labelledby="pills-two-code-features-example1-tab">
                                      @if($notifications->count() == 0)
                                        {{"Chưa có thông báo mới"}}
                                       @else

                                       @foreach($notifications as $notification)
                                       @foreach($notification->User()->get() as $newNotif)
                                             @if(isset($newNotif->id))
                                               @if($newNotif->id == Auth::user()->id && $notification->type == "user")
                                           <div class="media border-bottom" href="javascript:;">
                                             <div class="mt-1 mr-3">
                                               <div class="avatar">
                                                 <img class="avatar-img rounded-sm" src="{{asset('frontend/assets/svg/components/graphics-8.svg')}}" alt="Image Description">
                                               </div>
                                             </div>
                                             <div class="media-body">
                                               <div class="mb-2">
                                               <span class="d-block text-dark text-hover-primary font-size-1 font-weight-bold mb-1">
                                                 Bạn đã bị báo cáo với lý do
                                                 "{{Illuminate\Support\Str::limit($notification->reason, $limit = 20, $end = '...') }}"
                                               </span>
                                                 <small class="d-block text-body">Bởi {{$notification->Reporter->fullname}}</small>
                                               </div>
                                               <div class="d-flex justify-content-between mb-1">
                                               </div>
                                             </div>
                                           </div>
                                           @endif
                                           @endif
                                           @if($loop->index == 2)
                                           @break
                                           @endif
                                           @endforeach
                                           @endforeach

                                  <!-- end thông báo cá nhân -->

                                  @foreach($notifications as $notification)
                                      @foreach($notification->User()->get() as $newNotif)
                                         @if(isset($notification->Post->author_id))
                                            @if($notification->Post->author_id == Auth::user()->id && $notification->type == "post")
                                            <div class="media border-bottom" href="
                                            @if($notification->type == "post")
                                             {{url('post',$notification->Post->slug)}}
                                             @else
                                             {{"#"}}
                                             @endif">
                                             <div class="mt-1 mr-3">
                                               <div class="avatar">
                                                 <img class="avatar-img rounded-sm" src="{{asset('frontend/assets/svg/components/graphics-8.svg')}}" alt="Image Description">
                                               </div>
                                             </div>
                                             <div class="media-body">
                                               <div class="mb-2">
                                               <span class="d-block text-dark text-hover-primary font-size-1 font-weight-bold mb-1">
                                                 Bài viết của đã bị báo cáo tại
                                                 "{{Illuminate\Support\Str::limit($notification->Post->name, $limit = 20, $end = '...') }}"
                                               </span>
                                                 <small class="d-block text-body">Bởi {{$notification->Reporter->fullname}}</small>
                                               </div>
                                               <div class="d-flex justify-content-between mb-1">
                                               </div>
                                             </div>
                                           </div>
                                           @endif
                                           @endif
                                           @if($loop->index == 2)
                                           @break
                                           @endif
                                           @endforeach
                                           @endforeach


                                @endif

                       </div>
                     
                       <div class="tab-pane fade" id="pills-three-code-features-example1" role="tabpanel" aria-labelledby="pills-three-code-features-example1-tab">
                        @if($notifications->count() == 0)
                        {{"Chưa có thông báo mới"}}
                        @else
                        @foreach($notifications as $notification)
                        {{-- Nếu thông báo dạng "báo cáo bình luận" thì hiện thông báo --}}
                        @if($notification->type == "comment")
                        {{-- Nếu user đang online == user bị report thì hiện thông báo --}}
                          @if($notification->reportComment->user_id == Auth::id())

                              <div class="media border-bottom" href="javascript:;">
                               <div class="mt-1 mr-3">
                                 <div class="avatar">
                                   <img class="avatar-img rounded-sm" src="{{asset('frontend/assets/svg/components/graphics-8.svg')}}" alt="Image Description">
                                 </div>
                               </div>
                               <div class="media-body">
                                 <div class="mb-2">
                                 <span class="d-block text-dark text-hover-primary font-size-1 font-weight-bold mb-1">
                                   Bình luận của đã bị báo cáo tại
                                   "{{Illuminate\Support\Str::limit($notification->reportComment->content, $limit = 20, $end = '...') }}"
                                 </span>
                                   <small class="d-block text-body">Bởi {{$notification->Reporter->fullname}}</small>
                                 </div>
                                 <div class="d-flex justify-content-between mb-1">
                                 </div>
                               </div>
                             </div>
                             @endif
                             @if($loop->index == 2)
                             @break
                             @endif
                             @endif
                             {{-- @endforeach
                             @endif --}}
                             @endforeach

                        @endif
                       </div>
                     </div>

                   </div>

                   <div class="card-footer text-center py-3">
                     <a class="font-size-1" href="javascript:;">
                       Xem thêm
                       <i class="fa fa-angle-right ml-1"></i>
                     </a>
                   </div>
                 </div>
               </div>
               <!-- End My Courses - Submenu -->
             </li>
                          @endif
                          <!-- End My Courses -->
                        </ul>
                      </div>
                      <!-- End Navigation -->
                    </div>
                  </nav>
                  <!-- End Nav -->
        </div>
    </div>
</header>
