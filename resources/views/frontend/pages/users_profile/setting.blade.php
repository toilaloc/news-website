@extends('frontend.layouts.others.index')

@section('content')
    <!-- Breadcrumb Section -->
    <div class="bg-navy" style="background-image: url(../../../../assets//svg/components/abstract-shapes-20.svg);">
        <div class="container space-1 space-top-lg-2 space-bottom-lg-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-none d-lg-block">
                        <h1 class="h2 text-white">Thông báo</h1>
                    </div>

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb breadcrumb-light breadcrumb-no-gutter mb-0">
                        <li class="breadcrumb-item">Tài khoản</li>
                        <li class="breadcrumb-item active" aria-current="page">Thông báo</li>
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
                                        <img class="avatar-img" src="../../../../assets//img/160x160/img1.jpg" alt="Image Description">
                                        <img class="avatar-status avatar-lg-status" src="../../../../assets//svg/illustrations/top-vendor.svg" alt="Image Description" data-toggle="tooltip" data-placement="top" title="Verified user">
                                    </div>

                                    <h4 class="card-title">Trần Thanh Nam</h4>
                                    <p class="card-text font-size-1">namttpd02755@fpt.edu.vn</p>
                                </div>
                                <!-- End Avatar -->

                                <h6 class="text-cap small">Tài khoản</h6>

                                <!-- List -->
                                <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2 mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">
                                            <i class="fas fa-id-card nav-icon"></i> Thông tin cá nhân
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login-and-security.html">
                                            <i class="fas fa-shield-alt nav-icon"></i> Đăng nhập &amp; bảo mật
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="notifications.html">
                                            <i class="fas fa-bell nav-icon"></i> Thông báo
                                            <span class="badge badge-soft-navy badge-pill nav-link-badge">1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="preferences.html">
                                            <i class="fas fa-sliders-h nav-icon"></i> Sở thích
                                        </a>
                                    </li>
                                </ul>
                                <!-- End List -->

                                <h6 class="text-cap small">Mua sắm</h6>

                                <!-- List -->
                                <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2 mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link" href="orders.html">
                                            <i class="fas fa-shopping-basket nav-icon"></i>Đơn đặt hàng của bạn
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="wishlist.html">
                                            <i class="fas fa-heart nav-icon"></i> Danh sách yêu thích
                                            <span class="badge badge-soft-navy badge-pill nav-link-badge">2</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End List -->

                                <h6 class="text-cap small">Thanh toán</h6>

                                <!-- List -->
                                <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                                    <li class="nav-item">
                                        <a class="nav-link" href="billing.html">
                                            <i class="fas fa-credit-card nav-icon"></i> Các gói &amp; Thanh toán
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="address.html">
                                            <i class="fas fa-map-marker-alt nav-icon"></i> Địa chỉ
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="teams.html">
                                            <i class="fas fa-users nav-icon"></i> Đội
                                            <span class="badge badge-soft-navy badge-pill nav-link-badge">+2 người dùng mới</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End List -->

                                <div class="d-lg-none">
                                    <div class="dropdown-divider"></div>

                                    <!-- List -->
                                    <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                                        <li class="nav-item">
                                            <a class="nav-link text-primary" href="#">
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
                    <!-- Header -->
                    <div class="card-header">
                        <h5 class="card-header-title">Mạng lưới của tôi</h5>

                        <a id="toggleAll1" class="js-toggle-state link-underline" href="javascript:;" data-hs-toggle-state-options='{
                   "targetSelector": "#customSwitch1, #customSwitch2, #customSwitch3, #customSwitch4"
                 }'>
                            <span class="link-underline-toggle-default">Chuyển đổi tất cả</span>
                            <span class="link-underline-toggle-toggled">Gỡ bỏ tất cả</span>
                        </a>
                    </div>
                    <!-- End Header -->

                    <!-- Alert -->
                    <div class="alert alert-soft-danger text-center rounded-0 mb-0" role="alert">
                        Chúng tôi cần trình duyệt của bạn cho phép để hiển thị thông báo. Xin phep</a>
                    </div>
                    <!-- End Alert -->

                    <div class="card-body">
                        <div class="mb-3">
                            <small class="card-subtitle">GỬI CHO TÔI:

                            </small>
                        </div>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch d-flex" for="customSwitch1">
                            <input type="checkbox" class="toggle-switch-input" id="customSwitch1">
                            <span class="toggle-switch-label">
                  <span class="toggle-switch-indicator"></span>
                </span>
                            <span class="toggle-switch-content">
                  <span class="d-block">Mới cho bạn</span>
                  <small class="d-block text-muted">Email hàng tuần có các bức ảnh chụp từ các nhà thiết kế mà bạn theo dõi</small>
                </span>
                        </label>
                        <!-- End Checkbox Switch -->

                        <hr class="my-3">

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch d-flex" for="customSwitch2">
                            <input type="checkbox" class="toggle-switch-input" id="customSwitch2" checked>
                            <span class="toggle-switch-label">
                  <span class="toggle-switch-indicator"></span>
                </span>
                            <span class="toggle-switch-content">
                  <span class="d-block">
                    Hoạt động tài khoản <span class="badge badge-success ml-1">Mới</span></span>
                  <small class="d-block text-muted">Nhận thông báo quan trọng về bạn hoặc hoạt động bạn đã bỏ lỡ</small>
                </span>
                        </label>
                        <!-- End Checkbox Switch -->

                        <hr class="my-3">

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch d-flex" for="customSwitch3">
                            <input type="checkbox" class="toggle-switch-input" id="customSwitch3" checked>
                            <span class="toggle-switch-label">
                  <span class="toggle-switch-indicator"></span>
                </span>
                            <span class="toggle-switch-content">
                  <span class="d-block">Buổi gặp mặt gần bạn  <span class="badge badge-success ml-1">Mới</span></span>
                  <small class="d-block text-muted">Nhận email khi Cuộc gặp gỡ Dribbble được đăng gần vị trí của tôi</small>
                </span>
                        </label>
                        <!-- End Checkbox Switch -->

                        <hr class="my-3">

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch d-flex" for="customSwitch4">
                            <input type="checkbox" class="toggle-switch-input" id="customSwitch4">
                            <span class="toggle-switch-label">
                  <span class="toggle-switch-indicator"></span>
                </span>
                            <span class="toggle-switch-content">
                  <span class="d-block">Những cơ hội</span>
                  <small class="d-block text-muted">Nhận email hàng ngày khi các công việc thiết kế mới được đăng trong khu vực của bạn
                   </small>
                </span>
                        </label>
                        <!-- End Checkbox Switch -->
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h5 class="card-header-title"> Email trước</h5>

                        <a id="toggleAll3" class="js-toggle-state link-underline" href="javascript:;" data-hs-toggle-state-options='{
                   "targetSelector": "#customSwitch5, #customSwitch6, #customSwitch7, #customSwitch8"
                 }'>
                            <span class="link-underline-toggle-default">Chuyển đổi tất cả</span>
                            <span class="link-underline-toggle-toggled">Gỡ bỏ tất cả</span>
                        </a>
                    </div>
                    <!-- End Header -->

                    <div class="card-body">
                        <div class="mb-3">
                            <small class="card-subtitle">ĐĂNG KÝ CHO TÔI:</small>
                        </div>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch d-flex" for="customSwitch5">
                            <input type="checkbox" class="toggle-switch-input" id="customSwitch5" checked>
                            <span class="toggle-switch-label">
                  <span class="toggle-switch-indicator"></span>
                </span>
                            <span class="toggle-switch-content">
                  <span class="d-block">
                    Tin tức công ty

                    </span>
                  <small class="d-block text-muted"> Nhận tin tức, thông báo và cập nhật sản phẩm của Mặt trận</small>
                </span>
                        </label>
                        <!-- End Checkbox Switch -->

                        <hr class="my-3">

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch d-flex" for="customSwitch6">
                            <input type="checkbox" class="toggle-switch-input" id="customSwitch6">
                            <span class="toggle-switch-label">
                  <span class="toggle-switch-indicator"></span>
                </span>
                            <span class="toggle-switch-content">
                  <span class="d-block">Phát lại


                     <span class="badge badge-success ml-1">New</span></span>
                  <small class="d-block text-muted"> Email hàng tuần có các bức ảnh phổ biến</small>
                </span>
                        </label>
                        <!-- End Checkbox Switch -->

                        <hr class="my-3">

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch d-flex" for="customSwitch7">
                            <input type="checkbox" class="toggle-switch-input" id="customSwitch7">
                            <span class="toggle-switch-label">
                  <span class="toggle-switch-indicator"></span>
                </span>
                            <span class="toggle-switch-content">
                  <span class="d-block">Courtside <span class="badge badge-success ml-1">Mới</span></span>
                  <small class="d-block text-muted">Email hàng tuần có những câu chuyện mới nhất từ ​​blog của chúng tôi</small>
                </span>
                        </label>
                        <!-- End Checkbox Switch -->

                        <hr class="my-3">

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch d-flex" for="customSwitch8">
                            <input type="checkbox" class="toggle-switch-input" id="customSwitch8">
                            <span class="toggle-switch-label">
                  <span class="toggle-switch-indicator"></span>
                </span>
                            <span class="toggle-switch-content">
                  <span class="d-block">Công việc hàng tuần</span>
                  <small class="d-block text-muted">Thông báo hàng tuần về các công việc thiết kế</small>
                </span>
                        </label>
                        <!-- End Checkbox Switch -->
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h5 class="card-header-title">Sử dụng
                        </h5>

                        <a id="toggleAll4" class="js-toggle-state link-underline" href="javascript:;" data-hs-toggle-state-options='{
                   "targetSelector": "#customSwitch9, #customSwitch10, #customSwitch11"
                 }'>
                            <span class="link-underline-toggle-default">Chuyển đổi tất cả</span>
                            <span class="link-underline-toggle-toggled">Gỡ bỏ tất cả</span>
                        </a>
                    </div>
                    <!-- End Header -->

                    <div class="card-body">
                        <div class="mb-3">
                            <small class="card-subtitle">CHO PHÉP NGƯỜI KHÁC:</small>
                        </div>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch d-flex" for="customSwitch9">
                            <input type="checkbox" class="toggle-switch-input" id="customSwitch9">
                            <span class="toggle-switch-label">
                  <span class="toggle-switch-indicator"></span>
                </span>
                            <span class="toggle-switch-content">
                  <span class="d-block">Mã hóa dữ liệu
                  </span>
                  <small class="d-block text-muted">  Mã hóa tất cả dữ liệu được liên kết với tài khoản</small>
                </span>
                        </label>
                        <!-- End Checkbox Switch -->

                        <hr class="my-3">

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch d-flex" for="customSwitch10">
                            <input type="checkbox" class="toggle-switch-input" id="customSwitch10" checked>
                            <span class="toggle-switch-label">
                  <span class="toggle-switch-indicator"></span>
                </span>
                            <span class="toggle-switch-content">
                  <span class="d-block">Dịch vụ định vị
                    </span>
                  <small class="d-block text-muted">Cho phép các ứng dụng của bên thứ ba sử dụng vị trí hiện tại</small>
                </span>
                        </label>
                        <!-- End Checkbox Switch -->

                        <hr class="my-3">

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch d-flex" for="customSwitch11">
                            <input type="checkbox" class="toggle-switch-input" id="customSwitch11">
                            <span class="toggle-switch-label">
                  <span class="toggle-switch-indicator"></span>
                </span>
                            <span class="toggle-switch-content">
                  <span class="d-block">
                    Cho phép ghi chú riêng tư

                    </span>
                  <small class="d-block text-muted">Các thành viên có thể gửi cho bạn ghi chú cá nhân</small>
                </span>
                        </label>
                        <!-- End Checkbox Switch -->
                    </div>
                </div>
                <!-- End Card -->

                <!-- Toggle Button -->
                <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-sm-0">
                        <small class="card-subtitle">BẬT HOẶC TẮT TẤT CẢ THÔNG BÁO:
                        </small>
                    </div>

                    <a class="js-toggle-state btn btn-sm btn-primary" href="javascript:;" data-hs-toggle-state-options='{
                 "targetSelector": "#customSwitch1, #customSwitch2, #customSwitch3, #customSwitch4, #customSwitch5, #customSwitch6, #customSwitch7, #customSwitch8, #customSwitch9, #customSwitch10, #customSwitch11",
                 "slaveSelector": "#toggleAll1, #toggleAll2, #toggleAll3, #toggleAll4"
               }'>
                            <span class="btn-toggle-default">
                <i class="fas fa-toggle-off mr-1"></i> Bật
              </span>
                        <span class="btn-toggle-toggled">
                <i class="fas fa-toggle-on mr-1"></i>Tắt
              </span>
                    </a>
                </div>
                <!-- End Toggle Button -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Content Section -->
@endsection
