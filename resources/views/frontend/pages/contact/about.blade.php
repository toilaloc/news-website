@extends('frontend.layouts.others.index')

@section('content')
    <!-- Hero Section -->
    <div class="container space-top-3 space-top-lg-4 space-bottom-2">
        <div class="w-lg-80 text-center mx-lg-auto">
            <div class="mb-5 mb-md-11">
                <h1 class="display-4">About Us</h1>
                <p class="lead">Front is a web company that builds websites. Businesses of every size—from new startups to public companies—use our theme to build  and manage their businesses online.</p>
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
                    <span class="d-block display-4 font-size-md-down-4 text-dark text-uppercase mb-0">7</span>
                    <span>years in business</span>
                </div>
                <!-- End Stats -->
            </div>

            <div class="col-sm-4 col-lg-3 mb-7 mb-sm-0">
                <!-- Stats -->
                <div class="text-center">
                    <span class="d-block display-4 font-size-md-down-4 text-dark text-uppercase mb-0">3,5k+</span>
                    <span>copies sold</span>
                </div>
                <!-- End Stats -->
            </div>

            <div class="col-sm-4 col-lg-3">
                <!-- Stats -->
                <div class="text-center">
                    <span class="d-block display-4 font-size-md-down-4 text-dark text-uppercase mb-0">85%</span>
                    <span>happy customers</span>
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

    <!-- About Section -->
    <div class="container space-2 space-lg-3">
        <div class="row justify-content-lg-between">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h2>Tools should adapt to the user, not the other way around.</h2>
            </div>
            <div class="col-lg-6">
                <p>Since 2007, we have helped 25 companies launch over 1k incredible products. We believe the best digital solutions are built at the intersection of business strategy, available technology, and real user's needs.</p>
                <p>Things can get really complex, really quickly, and a pragmatic, synthetic and clear vision is essential to be able to create something that, after all, is meant to be used. Emotions also have a big role to play and developing clear and beautiful aesthetics is of the utmost importance to create a pleasant environment in which the user actually enjoys the time spent in it. In the end, we're all suckers for beautiful things that just work</p>
            </div>
        </div>
    </div>
    <!-- End About Section -->

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
            <span class="d-block small font-weight-bold text-cap mb-2">Our team</span>
            <h2>Creative mind by people like you</h2>
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

                        <span class="d-block small font-weight-bold text-cap mb-1">Founder / CEO</span>
                        <h4 class="text-lh-sm">Christina Kray</h4>
                        <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
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

                        <span class="d-block small font-weight-bold text-cap mb-1">Project Manager</span>
                        <h4 class="text-lh-sm">Jeff Fisher</h4>
                        <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
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

                        <span class="d-block small font-weight-bold text-cap mb-1">Product Designer</span>
                        <h4 class="text-lh-sm">Amy Forren</h4>
                        <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
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
                            <img class="avatar-img" src="{{asset('frontend/assets//img/100x100/img12.jpg')}}" alt="Image Description">
                        </div>

                        <span class="d-block small font-weight-bold text-cap mb-1">Want a new challenge?</span>
                        <h4 class="text-lh-sm">Join us</h4>
                        <p class="font-size-1">Browse through our job opportunities and become a member of the family!</p>
                    </div>

                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-xs btn-soft-secondary" href="#">View Open Jobs</a>
                    </div>
                </div>
                <!-- End Team -->
            </div>
        </div>

        <!-- Info -->
        <div class="text-center">
            <div class="d-inline-block font-size-1 border bg-white text-center rounded-pill py-3 px-4">
                Wanna work with us? <a class="font-weight-bold ml-3" href="hire-us.html">We are hiring <span class="fas fa-angle-right fa-sm ml-1"></span></a>
            </div>
        </div>
        <!-- End Info -->
    </div>
    <!-- End Team Section -->
@endsection
