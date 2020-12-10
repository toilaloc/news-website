@extends('frontend.layouts.others.index')
@section('title', 'F8News - Giới thiệu')
@section('og-title', 'F8News - Giới thiệu')
@section('og-url', url('frontend/about'))
@section('content')
    <!-- Hero Section -->
    <div class="container space-top-3 space-top-lg-2 space-bottom-2">
        <div class="w-lg-80 text-center mx-lg-auto">
            <div class="mb-5 mb-md-11">
                <h1 class="display-4">Về chúng tôi</h1>
                <p class="lead">F8news là một website tin tức. Cập nhật nhanh các tin tức mới nhất trong ngày ở trong và ngoài nước đem đến cho người đọc những tin tức chính xác và nhanh chóng. </p>
            </div>
        </div>

        <!-- Gallery Section -->
        <div class="row mx-n2">
            <div class="col-6 col-md px-2 mb-3">
                <div class="h-250rem bg-img-hero" style="background-image: url({{asset('frontend/assets//img/480x320/img17.jpg')}});"></div>
            </div>
            <div class="col-md-3 d-none d-md-block px-2 mb-3">
                <div class="h-250rem bg-img-hero" style="background-image: url({{asset('frontend/assets//img/480x320/img6.jpg')}});"></div>
            </div>
            <div class="col-6 col-md px-2 mb-3">
                <div class="h-250rem bg-img-hero" style="background-image: url({{asset('frontend/assets//img/480x320/img14.jpg')}});"></div>
            </div>

            <div class="w-100"></div>

            <div class="col-6 col-md px-2 mb-3 mb-md-0">
                <div class="h-250rem bg-img-hero" style="background-image: url({{asset('frontend/assets//img/480x320/img25.jpg')}});"></div>
            </div>
            <div class="col-md-4 d-none d-md-block px-2 mb-3 mb-md-0">
                <div class="h-250rem bg-img-hero" style="background-image: url({{asset('frontend/assets//img/480x320/img16.jpg')}});"></div>
            </div>
            <div class="col-6 col-md px-2">
                <div class="h-250rem bg-img-hero" style="background-image: url({{asset('frontend/assets//img/480x320/img12.jpg')}});"></div>
            </div>
        </div>
        <!-- End Gallery Section -->
    </div>
    <!-- End Hero Section -->

    <!-- Stats Section -->
    <div class="container space-top-lg-1 space-bottom-2 space-bottom-lg-3">
        <div class="row justify-content-lg-center">
            <div class="col-sm-4 col-lg-3 mb-7 mb-sm-0">
                <!-- Stats -->
                <div class="text-center">
                    <span class="d-block display-4 font-size-md-down-4 text-dark text-uppercase mb-0">2</span>
                    <span>Tháng hoạt động</span>
                </div>
                <!-- End Stats -->
            </div>

            <div class="col-sm-4 col-lg-3 mb-7 mb-sm-0">
                <!-- Stats -->
                <div class="text-center">
                    <span class="d-block display-4 font-size-md-down-4 text-dark text-uppercase mb-0">1k+</span>
                    <span>Người đọc truy cập</span>
                </div>
                <!-- End Stats -->
            </div>

            <div class="col-sm-4 col-lg-3">
                <!-- Stats -->
                <div class="text-center">
                    <span class="d-block display-4 font-size-md-down-4 text-dark text-uppercase mb-0">85%</span>
                    <span>Người đọc đánh giá tốt</span>
                </div>
                <!-- End Stats -->
            </div>
        </div>
    </div>
    <!-- End Stats Section -->

    <!-- Divider -->
    <div class="container">
        <div class="w-lg-65 mx-lg-auto">
            <hr class="my-0">
        </div>
    </div>
    <!-- End Divider -->

  

    <!-- Divider -->
    <div class="container">
        <div class="w-lg-65 mx-lg-auto">
            <hr class="my-0">
        </div>
    </div>
    <!-- End Divider -->

    <!-- Team Section -->
    <div class="container space-2 space-lg-3">
        <!-- Title -->
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">
            <span class="d-block small font-weight-bold text-cap mb-2">ĐỘI CỦA CHÚNG TÔI</span>
            <h2>Đầu óc sáng tạo của những người như bạn</h2>
        </div>
        <!-- End Title -->

        <div class="row mx-n2 mb-5">
            <div class="col-sm-6 col-lg-3 px-2 mb-3">
                <!-- Team -->
                <div class="card h-100 transition-3d-hover">
                    <div class="card-body">
                        <div class="avatar avatar-lg avatar-circle mb-4">
                            <img class="avatar-img" src="{{asset('frontend/assets//img/100x100/img1.jpg')}}" alt="Image Description">
                        </div>

                        <span class="d-block small font-weight-bold text-cap mb-1">NHÀ SÁNG LẬP / GIÁM ĐỐC ĐIỀU HÀNH</span>
                        <h4 class="text-lh-sm">Lê Xuân Lộc</h4>
                        <p class="font-size-1">Tôi là một người tham công tiếc việc, nhưng ngoài điều đó ra, tôi là một người khá đơn giản.</p>
                    </div>

                    <div class="card-footer border-0 pt-0">
                        <!-- Social Networks -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Social Networks -->
                    </div>
                </div>
                <!-- End Team -->
            </div>

            <div class="col-sm-6 col-lg-3 px-2 mb-3">
                <!-- Team -->
                <div class="card h-100 transition-3d-hover">
                    <div class="card-body">
                        <div class="avatar avatar-lg avatar-circle mb-4">
                            <img class="avatar-img" src="{{asset('frontend/assets//img/100x100/img3.jpg')}}" alt="Image Description">
                        </div>

                        <span class="d-block small font-weight-bold text-cap mb-1">QUẢN LÝ DỰ ÁN</span>
                        <h4 class="text-lh-sm">Lê Hoàng</h4>
                        <p class="font-size-1">Tôi là một người tham công tiếc việc, nhưng ngoài điều đó ra, tôi là một người khá đơn giản.</p>
                    </div>

                    <div class="card-footer border-0 pt-0">
                        <!-- Social Networks -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Social Networks -->
                    </div>
                </div>
                <!-- End Team -->
            </div>

            <div class="col-sm-6 col-lg-3 px-2 mb-3">
                <!-- Team -->
                <div class="card h-100 transition-3d-hover">
                    <div class="card-body">
                        <div class="avatar avatar-lg avatar-circle mb-4">
                            <img class="avatar-img" src="{{asset('frontend/assets//img/100x100/img11.jpg')}}" alt="Image Description">
                        </div>

                        <span class="d-block small font-weight-bold text-cap mb-1">NGƯỜI THIẾT KẾ SẢN PHẨM</span>
                        <h4 class="text-lh-sm">Mai Đức Tuấn</h4>
                        <p class="font-size-1">Tôi là một người tham công tiếc việc, nhưng ngoài điều đó ra, tôi là một người khá đơn giản.</p>
                    </div>

                    <div class="card-footer border-0 pt-0">
                        <!-- Social Networks -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Social Networks -->
                    </div>
                </div>
                <!-- End Team -->
            </div>

            <div class="col-sm-6 col-lg-3 px-2 mb-3">
                <!-- Team -->
                <div class="card h-100 transition-3d-hover">
                    <div class="card-body">
                        <div class="avatar avatar-lg avatar-circle mb-4">
                            <img class="avatar-img" src="{{asset('frontend/assets//img/100x100/img11.jpg')}}" alt="Image Description">
                        </div>

                        <span class="d-block small font-weight-bold text-cap mb-1">NGƯỜI THIẾT KẾ SẢN PHẨM</span>
                        <h4 class="text-lh-sm">Trần Thanh Nam</h4>
                        <p class="font-size-1">Tôi là một người tham công tiếc việc, nhưng ngoài điều đó ra, tôi là một người khá đơn giản.</p>
                    </div>

                    <div class="card-footer border-0 pt-0">
                        <!-- Social Networks -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Social Networks -->
                    </div>
                </div>
                <!-- End Team -->
            </div>
        </div>

     
    </div>
    <!-- End Team Section -->
@endsection
