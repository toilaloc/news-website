<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->

    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/font-awesome/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/slick-carousel/slick/slick.css') }}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme.css') }}">
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header"
        class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-white-nav-links-lg header-show-hide"
        data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
        <!-- Search -->
        <div id="searchPushTop" class="search-push-top">
            <div class="container position-relative">
                <div class="search-push-top-content pt-3">
                    <!-- Close Button -->
                    <div class="search-push-top-close-btn">
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-soft-secondary mt-2 mr-2"
                                href="javascript:;" data-hs-unfold-options='{
                  "target": "#searchPushTop",
                  "type": "jquery-slide",
                  "contentSelector": ".search-push-top"
                 }'>
                                <svg width="10" height="10" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor"
                                        d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- End Close Button -->

                    <!-- Input -->
                    <form class="input-group">
                        <input type="search" class="form-control" placeholder="Search Front" aria-label="Search Front">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                    <!-- End Input -->

                    <!-- Content -->
                    <div class="row d-none d-md-flex mt-7">
                        <div class="col-sm-6">
                            <span class="h5">Quick Links</span>

                            <div class="row">
                                <!-- Nav Link -->
                                <div class="col-6">
                                    <div class="nav nav-sm nav-x-0 flex-column">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-angle-right mr-1"></i>
                                            Search Results List
                                        </a>
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-angle-right mr-1"></i>
                                            Search Results Grid
                                        </a>
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-angle-right mr-1"></i>
                                            About
                                        </a>
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-angle-right mr-1"></i>
                                            Services
                                        </a>
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-angle-right mr-1"></i>
                                            Invoice
                                        </a>
                                    </div>
                                </div>
                                <!-- End Nav Link -->

                                <!-- Nav Link -->
                                <div class="col-6">
                                    <div class="nav nav-sm nav-x-0 flex-column">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-angle-right mr-1"></i>
                                            Profile
                                        </a>
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-angle-right mr-1"></i>
                                            User Contacts
                                        </a>
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-angle-right mr-1"></i>
                                            Reviews
                                        </a>
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-angle-right mr-1"></i>
                                            Settings
                                        </a>
                                    </div>
                                </div>
                                <!-- End Nav Link -->
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- Banner -->
                            <div class="rounded search-push-top-banner">
                                <div class="d-flex align-items-center">
                                    <div class="search-push-top-banner-container">
                                        <img class="img-fluid search-push-top-banner-img"
                                            src="{{ asset('frontend/img/mockups/img3.png') }}" alt="Image Description">
                                        <img class="img-fluid search-push-top-banner-img"
                                            src="{asset('frontend/img/mockups/img2.png')}}" alt="Image Description">
                                    </div>

                                    <div>
                                        <div class="mb-4">
                                            <span class="h5">Featured Item</span>
                                            <p>Create astonishing web sites and pages.</p>
                                        </div>
                                        <a class="btn btn-xs btn-soft-success transition-3d-hover"
                                            href="javascript:;">Apply Now <i
                                                class="fas fa-angle-right fa-sm ml-1"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Banner -->
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </div>
        <!-- End Search -->

        <div class="header-section">
            <div id="logoAndNav" class="container">
                <!-- Nav -->
                <nav class="js-mega-menu navbar navbar-expand-lg">
                    <div class="navbar-nav-wrap">
                        <!-- Logo -->
                        <a class="navbar-brand navbar-nav-wrap-brand" href="index.html" aria-label="Front">
                            <img src="{{ asset('img/logo.svg') }}" alt="Logo">
                        </a>
                        <!-- End Logo -->

                        <!-- Secondary Content -->
                        <div class="navbar-nav-wrap-content">
                            <!-- Search Classic -->
                            <div class="hs-unfold d-lg-none d-inline-block position-static">
                                <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-icon rounded-circle mr-1"
                                    href="javascript:;" data-hs-unfold-options='{
                              "target": "#searchClassic",
                              "type": "css-animation",
                              "animationIn": "slideInUp"
                             }'>
                                    <i class="fas fa-search"></i>
                                </a>

                                <div id="searchClassic"
                                    class="hs-unfold-content dropdown-menu w-100 shadow border-0 rounded-0 px-3 mt-0">
                                    <form class="input-group input-group-sm input-group-merge">
                                        <input type="text" class="form-control" placeholder="Bạn muốn tìm gì?"
                                            aria-label="What do you want to learn?">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-search"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Search Classic -->

                            <!-- Login Button -->
                            <div class="d-inline-block ml-auto">
                                @guest
                                    <a class="btn btn-sm btn-primary d-none d-lg-inline-block"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                @else
                                    <a class="text-light transition-3d-hover" href="{{ url('user', Auth::user()->username) }}">
                                        {{ Auth::user()->fullname }}
                                    </a>
                                    <a class="btn btn-sm btn-primary transition-3d-hover" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endguest
                            </div>
                            <!-- End Login Button -->
                        </div>
                        <!-- End Secondary Content -->

                        <!-- Responsive Toggle Button -->
                        <button type="button"
                            class="navbar-toggler navbar-nav-wrap-navbar-toggler btn btn-icon btn-sm rounded-circle"
                            aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                            data-toggle="collapse" data-target="#navBar">
                            <span class="navbar-toggler-default">
                                <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor"
                                        d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                                </svg>
                            </span>
                            <span class="navbar-toggler-toggled">
                                <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor"
                                        d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                                </svg>
                            </span>
                        </button>
                        <!-- End Responsive Toggle Button -->

                        <!-- Navigation -->
                        <div id="navBar" class="navbar-nav-wrap-navbar collapse navbar-collapse">
                            <ul class="navbar-nav" style="margin-left: 5%;width: 100%;">
                                <!-- Courses -->
                                <li class="hs-has-sub-menu navbar-nav-item">
                                    <a id="coursesMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;"
                                        aria-haspopup="true" aria-expanded="false" aria-labelledby="coursesSubMenu">
                                        <i class="fa fa-th font-size-1 mr-1"></i>
                                        Danh mục
                                    </a>

                                    <!-- Courses - Submenu -->
                                    <div id="coursesSubMenu" class="hs-sub-menu dropdown-menu"
                                        aria-labelledby="coursesMegaMenu" style="min-width: 270px;">
                                        <!-- Development -->
                                        <div class="hs-has-sub-menu">
                                            <a id="navLinkCoursesDevelopment"
                                                class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-controls="navSubmenuCoursesDevelopment">
                                                <span class="min-w-4rem text-center opacity-lg mr-1">
                                                    <i class="fa fa-laptop-code font-size-1 mr-1"></i>
                                                </span>
                                                Development
                                            </a>

                                            <div id="navSubmenuCoursesDevelopment" class="hs-sub-menu dropdown-menu"
                                                aria-labelledby="navLinkCoursesDevelopment" style="min-width: 270px;">

                                                <a class="dropdown-item" href="#">All Web Development</a>

                                            </div>
                                        </div>
                                        <!-- End Development -->

                                        <div class="dropdown-divider my-3"></div>

                                        <div class="px-4">
                                            <a class="btn btn-block btn-sm btn-primary transition-3d-hover"
                                                href="courses-listing.html">All Courses</a>
                                        </div>
                                    </div>
                                    <!-- End Courses - Submenu -->
                                </li>
                                <!-- End Courses -->

                                <!-- Search Form -->
                                <li class="d-none d-lg-inline-block navbar-nav-item flex-grow-1 mx-2">
                                    <form class="input-group input-group-sm input-group-merge w-75">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="What do you want to learn?"
                                            aria-label="What do you want to learn?">
                                    </form>
                                </li>
                                <!-- End Search Form -->

                                <!-- Pages -->
                                <li class="hs-has-sub-menu navbar-nav-item mr-lg-auto">
                                    <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle"
                                        href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                        aria-labelledby="pagesSubMenu">Pages</a>

                                    <!-- Pages - Submenu -->
                                    <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu"
                                        aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                                        <a class="dropdown-item" href="courses-listing.html">Courses</a>
                                        <a class="dropdown-item" href="course-description.html">Course description</a>
                                        <a class="dropdown-item" href="author.html">Author</a>
                                    </div>
                                    <!-- End Pages - Submenu -->
                                </li>
                                <!-- End Pages -->
                            </ul>
                        </div>
                        <!-- End Navigation -->
                    </div>
                </nav>
                <!-- End Nav -->
            </div>
        </div>
    </header>

