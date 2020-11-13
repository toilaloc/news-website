@extends('frontend.layouts.others.index')

@section('content')
    <!-- Breadcrumb Section -->
    <div class="bg-navy" style="background-image: url(../../../../assets//svg/components/abstract-shapes-20.svg);">
        <div class="container space-1 space-top-lg-2 space-bottom-lg-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-none d-lg-block">
                        <h1 class="h2 text-white">Địa chỉ</h1>
                    </div>

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb breadcrumb-light breadcrumb-no-gutter mb-0">
                        <li class="breadcrumb-item">Tài khoản</li>
                        <li class="breadcrumb-item active" aria-current="page">Địa chỉ</li>
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
                        <h5 class="card-header-title">Địa chỉ của tôi</h5>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 mb-5 mb-sm-7">
                                <!-- Radio Checkbox -->
                                <div class="custom-control custom-radio custom-control-inline w-100 h-100">
                                    <input type="radio" id="billingRadio1" name="billingRadio" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="billingRadio1">
                                        <span class="h5 d-block">Địa chỉ thanh toán # 1</span>

                                        <span class="d-block mb-2">
                        08, Hà Tăn Tính<br>
                       Hòa khánh Nam, Liên Chiểu<br>
                        Đà Nẵng<br>


                      <a class="btn btn-xs btn-white" href="index.html#editAddressCard">
                        <i class="fas fa-pencil-alt mr-1"></i> Sửa địa chỉ
                      </a>
                                    </label>
                                </div>
                                <!-- End Radio Checkbox -->
                            </div>

                            <div class="col-sm-6 mb-5 mb-sm-7">
                                <!-- Radio Checkbox -->
                                <div class="custom-control custom-radio custom-control-inline w-100 h-100">
                                    <input type="radio" id="billingRadio2" name="billingRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="billingRadio2">
                                        <span class="h5 d-block">Địa chỉ thanh toán # 2</span>

                                        <span class="d-block mb-2">
                        08, Hà Tăn Tính<br>
                       Hòa khánh Nam, Liên Chiểu<br>
                        Đà Nẵng<br>


                      <a class="btn btn-xs btn-white" href="index.html#editAddressCard">
                        <i class="fas fa-pencil-alt mr-1"></i> Sửa địa chỉ
                      </a>
                                    </label>
                                </div>
                                <!-- End Radio Checkbox -->
                            </div>

                            <div class="col-sm-6 mb-5 mb-sm-7">
                                <!-- Card -->
                                <a class="card card-dashed" href="javascript:;" data-toggle="modal" data-target="#addNewAddressModal">
                                    <div class="card-body card-body-centered card-dashed-body">
                                        <i class="fas fa-building fa-lg mb-2"></i> Thêm một địa chỉ mới
                                    </div>
                                </a>
                                <!-- End Card -->
                            </div>
                        </div>
                        <!-- End Row -->

                        <div class="mb-4">
                            <h5>Địa điểm thuế</h5>
                            <p class="mb-0">Đà nẵng</p>
                            <a class="link" href="#">Thêm thông tin</a>
                        </div>

                        <p class="mb-0">Vị trí văn bản của bạn xác định các loại thuế được áp dụng cho hóa đơn của bạn.</p>
                        <a class="link" href="#">Làm cách nào để sửa địa điểm thuế của tôi?</a>
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Content Section -->
@endsection
