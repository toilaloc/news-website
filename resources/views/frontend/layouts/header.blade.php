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

    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/font-awesome/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/slick-carousel/slick/slick.css')}}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/theme.css')}}">
</head>
<body>
<!-- ========== HEADER ========== -->
<header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-white-nav-links-lg header-show-hide"
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
                        <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-soft-secondary mt-2 mr-2" href="javascript:;"
                           data-hs-unfold-options='{
                  "target": "#searchPushTop",
                  "type": "jquery-slide",
                  "contentSelector": ".search-push-top"
                 }'>
                            <svg width="10" height="10" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
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
                                    <img class="img-fluid search-push-top-banner-img" src="{{asset('frontend/img/mockups/img3.png')}}" alt="Image Description">
                                    <img class="img-fluid search-push-top-banner-img" src="{asset('frontend/img/mockups/img2.png')}}" alt="Image Description">
                                </div>

                                <div>
                                    <div class="mb-4">
                                        <span class="h5">Featured Item</span>
                                        <p>Create astonishing web sites and pages.</p>
                                    </div>
                                    <a class="btn btn-xs btn-soft-success transition-3d-hover" href="javascript:;">Apply Now <i class="fas fa-angle-right fa-sm ml-1"></i></a>
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
                <!-- Logo -->
                <a class="navbar-brand navbar-brand-default" href="../landings/index.html" aria-label="Front">
                    <img src="../images/logo-white.svg" alt="Logo">
                </a>
                <!-- End Logo -->

                <!-- Logo -->
                <a class="navbar-brand navbar-brand-on-scroll" href="../landings/index.html" aria-label="Front">
                    <img src="../images/logo.svg" alt="Logo">
                </a>
                <!-- End Logo -->

                <!-- Responsive Toggle Button -->
                <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle"
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
                <div id="navBar" class="collapse navbar-collapse">
                    <div class="navbar-body header-abs-top-inner">
                        <ul class="navbar-nav">
                            <!-- Home -->
                            <li class="hs-has-mega-menu navbar-nav-item">
                                <a id="homeMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Landings</a>

                                <!-- Home - Mega Menu -->
                                <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="homeMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6">
                                            <!-- Banner Image -->
                                            <div class="navbar-banner" style="background-image: url({{asset('frontend//img/750x750/img1.jpg')}});">
                                                <div class="navbar-banner-content">
                                                    <div class="mb-4">
                                                        <span class="h2 d-block text-white">Branding Works</span>
                                                        <p class="text-white">Experience a level of our quality in both design &amp; customization works.</p>
                                                    </div>
                                                    <a class="btn btn-primary btn-sm transition-3d-hover" href="#">Learn More <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Banner Image -->
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="row mega-menu-body">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <span class="d-block h5">Classic</span>
                                                    <a class="dropdown-item" href="../landings/index.html">Agency</a>
                                                    <a class="dropdown-item" href="../landings/classic-analytics.html">Analytics <span class="badge badge-primary badge-pill ml-2">Hot</span></a>
                                                    <a class="dropdown-item" href="../landings/classic-studio.html">Studio</a>
                                                    <a class="dropdown-item" href="../landings/classic-marketing.html">Marketing</a>
                                                    <a class="dropdown-item" href="../landings/classic-advertisement.html" target="_blank">Advertisement <span class="badge badge-primary badge-pill ml-2">Hot</span></a>
                                                    <a class="dropdown-item" href="../landings/classic-consulting.html">Consulting</a>
                                                    <a class="dropdown-item" href="../landings/classic-portfolio.html">Portfolio</a>
                                                    <a class="dropdown-item" href="../landings/classic-software.html">Software</a>
                                                    <a class="dropdown-item" href="../landings/classic-business.html">Business</a>
                                                </div>

                                                <div class="col-sm-6">
                                                    <span class="d-block h5">App</span>
                                                    <div class="mb-3">
                                                        <a class="dropdown-item" href="../landings/app-ui-kit.html">UI Kit</a>
                                                        <a class="dropdown-item" href="../landings/app-saas.html">SaaS</a>
                                                        <a class="dropdown-item" href="../landings/app-workflow.html">Workflow</a>
                                                        <a class="dropdown-item" href="../landings/app-payment.html">Payment</a>
                                                        <a class="dropdown-item" href="../landings/app-tool.html">Tool</a>
                                                    </div>

                                                    <span class="d-block h5">Onepages</span>
                                                    <a class="dropdown-item" href="../landings/onepage-corporate.html">Corporate</a>
                                                    <a class="dropdown-item" href="../landings/onepage-saas.html">SaaS <span class="badge badge-primary badge-pill ml-2">Hot</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Home - Mega Menu -->
                            </li>
                            <!-- End Home -->

                            <!-- Pages -->
                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Pages</a>

                                <!-- Pages - Submenu -->
                                <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                                    <!-- Account -->
                                    <div class="hs-has-sub-menu">
                                        <a id="navLinkPagesAccount" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesAccount">Account <span class="badge badge-success badge-pill ml-2">New</span></a>

                                        <div id="navSubmenuPagesAccount" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesAccount" style="min-width: 230px;">
                                            <a class="dropdown-item" href="../account/index.html">Personal info</a>
                                            <a class="dropdown-item" href="../account/login-and-security.html">Login &amp; security</a>
                                            <a class="dropdown-item" href="../account/notifications.html">Notifications</a>
                                            <a class="dropdown-item" href="../account/preferences.html">Preferences</a>
                                            <a class="dropdown-item" href="../account/orders.html">Orders</a>
                                            <a class="dropdown-item" href="../account/wishlist.html">Wishlist</a>
                                            <a class="dropdown-item" href="../account/billing.html">Plans &amp; payment</a>
                                            <a class="dropdown-item" href="../account/address.html">Address</a>
                                            <a class="dropdown-item" href="../account/teams.html">Teams</a>
                                        </div>
                                    </div>
                                    <!-- Account -->

                                    <!-- Company -->
                                    <div class="hs-has-sub-menu">
                                        <a id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesCompany">Company</a>

                                        <div id="navSubmenuPagesCompany" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesCompany" style="min-width: 230px;">
                                            <a class="dropdown-item" href="../pages/about-agency.html">About Agency</a>
                                            <a class="dropdown-item" href="../pages/services-agency.html">Services Agency</a>
                                            <a class="dropdown-item" href="../pages/customers.html">Customers</a>
                                            <a class="dropdown-item" href="../pages/customer-story.html">Customer story</a>
                                            <a class="dropdown-item" href="../pages/careers.html">Careers</a>
                                            <a class="dropdown-item" href="../pages/careers-single.html">Careers Single</a>
                                            <a class="dropdown-item" href="../pages/hire-us.html">Hire Us</a>
                                        </div>
                                    </div>
                                    <!-- Company -->

                                    <!-- Portfolio -->
                                    <div class="hs-has-sub-menu">
                                        <a id="navLinkPagesPortfolio" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesPortfolio">Portfolio</a>

                                        <div id="navSubmenuPagesPortfolio" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesPortfolio" style="min-width: 230px;">
                                            <a class="dropdown-item" href="../portfolio/grid.html">Grid</a>
                                            <a class="dropdown-item" href="../portfolio/masonry.html">Masonry</a>
                                            <a class="dropdown-item" href="../portfolio/modern.html">Modern</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="../portfolio/case-studies-branding.html">Case Studies Branding</a>
                                            <a class="dropdown-item" href="../portfolio/case-studies-product.html">Case Studies Product</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="../portfolio/single-page-list.html">Single Page List</a>
                                            <a class="dropdown-item" href="../portfolio/single-page-grid.html">Single Page Grid</a>
                                            <a class="dropdown-item" href="../portfolio/single-page-masonry.html">Single Page Masonry</a>
                                        </div>
                                    </div>
                                    <!-- End Portfolio -->

                                    <!-- Login -->
                                    <div class="hs-has-sub-menu">
                                        <a id="navLinkPagesLogin" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesLogin">Login &amp; Signup</a>

                                        <div id="navSubmenuPagesLogin" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesLogin" style="min-width: 230px;">
                                            <a class="dropdown-item" href="../pages/login.html">Login</a>
                                            <a class="dropdown-item" href="../pages/signup.html">Signup</a>
                                            <a class="dropdown-item" href="../pages/recover-account.html">Recover Account</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="../pages/login-simple.html">Login Simple</a>
                                            <a class="dropdown-item" href="../pages/signup-simple.html">Signup Simple</a>
                                            <a class="dropdown-item" href="../pages/recover-account-simple.html">Recover Account Simple</a>
                                        </div>
                                    </div>
                                    <!-- Signup -->

                                    <!-- Contacts -->
                                    <div class="hs-has-sub-menu">
                                        <a id="navLinkContactsServices" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuContactsServices">Contacts</a>

                                        <div id="navSubmenuContactsServices" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkContactsServices" style="min-width: 230px;">
                                            <a class="dropdown-item" href="../pages/contacts-agency.html">Contacts Agency</a>
                                            <a class="dropdown-item" href="../pages/contacts-start-up.html">Contacts Start-Up</a>
                                        </div>
                                    </div>
                                    <!-- Contacts -->

                                    <!-- Utilities -->
                                    <div class="hs-has-sub-menu">
                                        <a id="navLinkPagesUtilities" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesUtilities">Utilities</a>

                                        <div id="navSubmenuPagesUtilities" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesUtilities" style="min-width: 230px;">
                                            <a class="dropdown-item" href="../pages/pricing.html">Pricing</a>
                                            <a class="dropdown-item" href="../pages/faq.html">FAQ</a>
                                            <a class="dropdown-item" href="../pages/terms.html">Terms &amp; Conditions</a>
                                            <a class="dropdown-item" href="../pages/privacy.html">Privacy &amp; Policy</a>
                                        </div>
                                    </div>
                                    <!-- Utilities -->

                                    <!-- Specialty -->
                                    <div class="hs-has-sub-menu">
                                        <a id="navLinkPagesSpecialty" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesSpecialty">Specialty</a>

                                        <div id="navSubmenuPagesSpecialty" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesSpecialty" style="min-width: 230px;">
                                            <a class="dropdown-item" href="../pages/cover-page.html">Cover Page</a>
                                            <a class="dropdown-item" href="../pages/coming-soon.html">Coming Soon</a>
                                            <a class="dropdown-item" href="../pages/maintenance-mode.html">Maintenance Mode</a>
                                            <a class="dropdown-item" href="../pages/status.html">Status</a>
                                            <a class="dropdown-item" href="../pages/invoice.html">Invoice</a>
                                            <a class="dropdown-item" href="../pages/error-404.html">Error 404</a>
                                        </div>
                                    </div>
                                    <!-- Specialty -->
                                </div>
                                <!-- End Pages - Submenu -->
                            </li>
                            <!-- End Pages -->

                            <!-- Blog -->
                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Blog</a>

                                <!-- Blog - Submenu -->
                                <div id="blogSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item" href="../blog/journal.html">Journal</a>
                                    <a class="dropdown-item" href="../blog/metro.html">Metro</a>
                                    <a class="dropdown-item" href="../blog/newsroom.html">Newsroom</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../blog/blog-profile.html">Blog Profile</a>
                                    <a class="dropdown-item" href="../blog/single-article.html">Single Article</a>
                                </div>
                                <!-- End Submenu -->
                            </li>
                            <!-- End Blog -->

                            <!-- Shop -->
                            <li class="hs-has-mega-menu navbar-nav-item"
                                data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "440px"
                      }
                    }'>
                                <a id="shopMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Shop</a>

                                <!-- Shop - Mega Menu -->
                                <div class="hs-mega-menu dropdown-menu" aria-labelledby="shopMegaMenu">
                                    <div class="mega-menu-body">
                                        <span class="d-block h5">Shop Elements</span>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a class="dropdown-item" href="../shop/classic.html">Classic</a>
                                                <a class="dropdown-item" href="../shop/categories.html">Categories</a>
                                                <a class="dropdown-item" href="../shop/categories-sidebar.html">Categories Sidebar</a>
                                                <a class="dropdown-item" href="../shop/products-grid.html">Products Grid</a>
                                                <a class="dropdown-item" href="../shop/products-list.html">Products List</a>
                                            </div>

                                            <div class="col-sm-6">
                                                <a class="dropdown-item" href="../shop/single-product.html">Single Product</a>
                                                <a class="dropdown-item" href="../shop/empty-cart.html">Empty Cart</a>
                                                <a class="dropdown-item" href="../shop/cart.html">Cart</a>
                                                <a class="dropdown-item" href="../shop/checkout.html">Checkout</a>
                                                <a class="dropdown-item" href="../shop/order-completed.html">Order Completed</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mega Menu Banner -->
                                    <div class="navbar-product-banner">
                                        <div class="d-flex align-items-end">
                                            <img class="img-fluid mr-4" src="{{asset('frontend//img/mockups/img4.png')}}" alt="Image Description">
                                            <div class="navbar-product-banner-content">
                                                <div class="mb-4">
                                                    <span class="h4 d-block text-primary">Win T-shirt</span>
                                                    <p>Win one of our Front brand T-shirts.</p>
                                                </div>
                                                <a class="btn btn-sm btn-soft-primary transition-3d-hover" href="../shop/classic.html">Learn More <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu Banner -->
                                </div>
                                <!-- End Shop - Mega Menu -->
                            </li>
                            <!-- End Shop -->

                            <!-- Demos -->
                            <li class="hs-has-mega-menu navbar-nav-item"
                                data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "900px"
                      }
                    }'>
                                <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Demos</a>

                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="demosMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-lg-8">
                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="../course/index.html">
                                                        <div class="media align-items-center">
                                                            <img class="navbar-promo-icon" src="{{asset('frontend//svg/icons/icon-67.svg')}}" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Course <span class="badge badge-success badge-pill ml-1">New</span></span>
                                                                <span class="navbar-promo-text">Learn On-demand demo</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="../app-marketplace/index.html">
                                                        <div class="media align-items-center">
                                                            <img class="navbar-promo-icon" src="{{asset('frontend//svg/icons/icon-45.svg')}}" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">App Marketplace</span>
                                                                <span class="navbar-promo-text">Marketplace app demo</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                            </div>

                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="../help-desk/index.html">
                                                        <div class="media align-items-center">
                                                            <img class="navbar-promo-icon" src="{{asset('frontend//svg/icons/icon-4.svg')}}" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Help Desk</span>
                                                                <span class="navbar-promo-text">Help desk demo</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link disabled" href="javascript:;">
                                                        <div class="media align-items-center">
                                                            <img class="navbar-promo-icon" src="{{asset('frontend//svg/icons/icon-13.svg')}}" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Real Estate</span>
                                                                <span class="navbar-promo-text">Coming soon...</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                            </div>

                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link disabled" href="javascript:;">
                                                        <div class="media align-items-center">
                                                            <img class="navbar-promo-icon" src="{{asset('frontend//svg/icons/icon-19.svg')}}" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Job</span>
                                                                <span class="navbar-promo-text">Coming soon...</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link disabled" href="javascript:;">
                                                        <div class="media align-items-center">
                                                            <img class="navbar-promo-icon" src="{{asset('frontend//svg/icons/icon-28.svg')}}" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">New demo</span>
                                                                <span class="navbar-promo-text">Coming soon...</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                            </div>
                                        </div>

                                        <!-- Promo -->
                                        <div class="col-lg-4 navbar-promo d-none d-lg-block">
                                            <a class="d-block navbar-promo-inner" href="#">
                                                <div class="position-relative">
                                                    <img class="img-fluid rounded mb-3" src="{{asset('frontend//img/380x227/img1.jpg')}}" alt="Image Description">
                                                </div>
                                                <span class="navbar-promo-text font-size-1">Front makes you look at things from a different perspectives.</span>
                                            </a>
                                        </div>
                                        <!-- End Promo -->
                                    </div>
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!-- End Demos -->

                            <!-- Docs -->
                            <li class="hs-has-mega-menu navbar-nav-item"
                                data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "260px"
                      }
                    }'>
                                <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Docs</a>

                                <!-- Docs - Submenu -->
                                <div class="hs-mega-menu dropdown-menu" aria-labelledby="docsMegaMenu" style="min-width: 330px;">
                                    <!-- Promo Item -->
                                    <div class="navbar-promo-item">
                                        <a class="navbar-promo-link" href="../../documentation/index.html">
                                            <div class="media align-items-center">
                                                <img class="navbar-promo-icon" src="{{asset('frontend//svg/icons/icon-2.svg')}}" alt="SVG">
                                                <div class="media-body">
                            <span class="navbar-promo-title">
                              Documentation
                              <span class="badge badge-primary badge-pill ml-1">v3.2.2</span>
                            </span>
                                                    <small class="navbar-promo-text">Development guides</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Promo Item -->

                                    <!-- Promo Item -->
                                    <div class="navbar-promo-item">
                                        <a class="navbar-promo-link" href="../../snippets/index.html">
                                            <div class="media align-items-center">
                                                <img class="navbar-promo-icon" src="{{asset('frontend//svg/icons/icon-1.svg')}}" alt="SVG">
                                                <div class="media-body">
                                                    <span class="navbar-promo-title">Snippets</span>
                                                    <small class="navbar-promo-text">Start building</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Promo Item -->

                                    <div class="navbar-promo-footer">
                                        <!-- List -->
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="navbar-promo-footer-item">
                                                    <span class="navbar-promo-footer-text">Check what's new</span>
                                                    <a class="navbar-promo-footer-text" href="../../documentation/changelog.html">
                                                        Changelog
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 navbar-promo-footer-ver-divider">
                                                <div class="navbar-promo-footer-item">
                                                    <span class="navbar-promo-footer-text">Have a question?</span>
                                                    <a class="navbar-promo-footer-text" href="http://htmlstream.com/contact-us">
                                                        Contact us
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List -->
                                    </div>
                                </div>
                                <!-- End Docs - Submenu -->
                            </li>
                            <!-- End Docs -->

                            <!-- Button -->
                            <li class="navbar-nav-last-item">
                                <a class="btn btn-sm btn-primary transition-3d-hover" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">
                                    Buy Now
                                </a>
                            </li>
                            <!-- End Button -->
                        </ul>
                    </div>
                </div>
                <!-- End Navigation -->
            </nav>
            <!-- End Nav -->
        </div>
    </div>
</header>
