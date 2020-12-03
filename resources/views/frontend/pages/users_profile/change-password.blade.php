@extends('frontend.layouts.others.index')
@section('title', "F8News - Đổi mật khẩu")
@section('content')
    <!-- Breadcrumb Section -->
    <div class="bg-navy" style="background-image: url({{asset('frontend/assets/svg/components/abstract-shapes-20.svg')}});">
        <div class="container space-1 space-top-lg-2 space-bottom-lg-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-none d-lg-block">
                        <h1 class="h2 text-white">Đăng nhập &amp; Bảo mật</h1>
                    </div>

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb breadcrumb-light breadcrumb-no-gutter mb-0">
                        <li class="breadcrumb-item">Tài khoản</li>
                        <li class="breadcrumb-item active" aria-current="page">Đăng nhập &amp; Bảo mật</li>
                    </ol>
                    <!-- End Breadcrumb -->
                </div>

                <div class="col-auto">
                    <div class="d-none d-lg-block">
                        <a class="btn btn-sm btn-soft-light" href="#">Đăng xuất</a>
                    </div>

                    <!-- Responsive Toggle Button -->
                    <button type="button" class="navbar-toggler btn btn-icon btn-sm rounde-circle d-lg-none" aria-label="Toggle navigation" aria-expanded="false" aria-controls="sidebarNav" data-toggle="collapse" data-target="#sidebarNav">
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
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Section -->

    <!-- Content Section -->
    <div class="container space-1 space-top-lg-0 mt-lg-n10">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show" role="alert">   
    {{ $error}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
        <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
      </svg>
    </button>
  </div>
  @endforeach
  @endif
        @if(session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </button>
          </div>
          @endif   
          @if(session()->get('danger'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session()->get('danger') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
                </svg>
              </button>
            </div>
            @endif   
        <div class="row">
            <div class="col-lg-3">
                <!-- Navbar -->
                <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
                    <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
                        <!-- Card -->
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Avatar -->
                                <div class="d-none d-lg-block text-center mb-5">
                                    <div class="avatar avatar-xxl avatar-circle mb-3">
                                    <img class="avatar-img w-100" src="{{asset('uploads/users')}}/{{$user->thumbnail}}" alt="{{$user->fullname}}">
                                        <img class="avatar-status avatar-lg-status" src="{{asset('frontend/assets/svg/illustrations/top-vendor.svg')}}" data-toggle="tooltip" data-placement="top" title="Verified user">
                                    </div>

                                <h4 class="card-title">{{$user->name}}</h4>
                                <p class="card-text font-size-1">{{$user->email}}</p>
                                </div>
                                <!-- End Avatar -->

                                <h6 class="text-cap small">Tài khoản</h6>

                                <!-- List -->
                                <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2 mb-4">
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{url('user', $user->username)}}">
                                            <i class="fas fa-id-card nav-icon"></i> Thông tin cá nhân
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{url('/change-password',$user->username)}}">
                                            <i class="fas fa-shield-alt nav-icon"></i> Đổi mật khẩu
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{url('author',$user->username)}}">
                                            <i class="fas fa-chart-line nav-icon"></i> Hoạt động
                                        </a>
                                    </li>
    
                                </ul>
                                <!-- End List -->

                                <h6 class="text-cap small">Theo dõi</h6>

                                <!-- List -->
                                <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                                    <li class="nav-item">
                                        <a class="nav-link" href="teams.html">
                                            <i class="fas fa-users nav-icon"></i> Đang theo dõi
                                            <span class="badge badge-soft-navy badge-pill nav-link-badge">{{$user->Following->count()}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="teams.html">
                                            <i class="fas fa-user-friends nav-icon"></i> Người theo dõi
                                            <span class="badge badge-soft-navy badge-pill nav-link-badge">{{$user->hasFollowers->count()}}</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End List -->

                                <div class="d-lg-none">
                                    <div class="dropdown-divider"></div>

                                    <!-- List -->
                                    <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                                        <li class="nav-item">
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                         </form>
                                            <a class="nav-link text-primary" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt nav-icon"></i> Đăng xuất
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
                <!-- End Navbar -->
            </div>

            <div class="col-lg-9">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h5 class="card-title">Mât khẩu</h5>
                    </div>

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Form -->
                        <form method="POST" action="{{route('userfront.pass',$user->username)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Mật khẩu hiện tại</label>

                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="currentPassword" id="currentPasswordLabel" placeholder="Nhập mật khẩu cũ" aria-label="Nhập mật khẩu cũ">
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="newPassword" class="col-sm-3 col-form-label input-label">Mật khẩu mới</label>

                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" id="newPassword" placeholder="Nhập mật khẩu mới" aria-label="Nhập mật khẩu mới">
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="confirmNewPasswordLabel" class="col-sm-3 col-form-label input-label">Xác nhận mật khẩu mới</label>

                                <div class="col-sm-9">
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="confirmNewPassword" id="confirmNewPasswordLabel" placeholder="Nhập lại mật khẩu mới" aria-label="Nhập lại mật khẩu mới">
                                    </div>

                                    <h5>Yêu cầu mật khẩu:</h5>

                                    <p class="card-text font-size-1">Đảm bảo rằng các yêu cầu này được đáp ứng:</p>

                                    <ul class="font-size-1">
                                        <li>Độ dài tối thiểu 8 ký tự - càng nhiều, càng tốt</li>
                                        <li>Ít nhất một ký tự viết thường</li>
                                        <li>Ít nhất một ký tự viết hoa</li>
                                        <li>Ít nhất một số, ký hiệu hoặc ký tự khoảng trắng</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <div class="d-flex justify-content-end">
                                <a class="btn btn-white" href="javascript:;">Hủy bỏ</a>
                                <span class="mx-2"></span>
                                <button type="submit" class="btn btn-primary">Cập nhật mật khẩu</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->



                <!-- edit -->



            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Content Section -->
@endsection
