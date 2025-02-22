@extends('frontend.layouts.others.index')

@section('content')
    <!-- Hero Section -->
    <div class="position-relative">
        <div class="bg-img-hero" style="background-image: url(../../../../assets//svg/components/abstract-shapes-12.svg);">
            <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
                <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">
                    <h1>Liên hệ chúng tôi</h1>
                    <p>We'd love to talk about how we can help you.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
                        <!-- Card -->
                        <a class="card text-center h-100 transition-3d-hover" href="#">
                            <div class="card-body p-lg-5">
                                <figure class="max-w-8rem w-100 mx-auto mb-4">
                                    <img class="img-fluid" src="../../../../assets//svg/icons/icon-7.svg" alt="SVG">
                                </figure>
                                <h3 class="h4">Tư vấn</h3>
                                <p class="text-body mb-0">Tư vấn dành cho tác giả và đọc giả.</p>
                            </div>
                            <div class="card-footer font-weight-bold py-3 px-lg-5">
                                Contact support <i class="fas fa-angle-right fa-sm ml-1"></i>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
                        <!-- Card -->
                        <a class="card text-center h-100 transition-3d-hover" href="#">
                            <div class="card-body p-lg-5">
                                <figure class="max-w-8rem w-100 mx-auto mb-4">
                                    <img class="img-fluid" src="../../../../assets//svg/icons/icon-4.svg" alt="SVG">
                                </figure>
                                <h3 class="h4">FAQ</h3>
                                <p class="text-body mb-0">Giải đáp mọi điều khoản của hệ thống.</p>
                            </div>
                            <div class="card-footer font-weight-bold py-3 px-lg-5">
                                Visit FAQ <i class="fas fa-angle-right fa-sm ml-1"></i>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>

                    <div class="col-md-4 mb-md-n11">
                        <!-- Card -->
                        <a class="card text-center h-100 transition-3d-hover" href="#">
                            <div class="card-body p-lg-5">
                                <figure class="max-w-8rem w-100 mx-auto mb-4">
                                    <img class="img-fluid" src="../../../../assets//svg/icons/icon-44.svg" alt="SVG">
                                </figure>
                                <h3 class="h4">Developer APIs</h3>
                                <p class="text-body mb-0">Cung cấp API dành cho nhà pháp triển.</p>
                            </div>
                            <div class="card-footer font-weight-bold py-3 px-lg-5">
                                Contact sales <i class="fas fa-angle-right fa-sm ml-1"></i>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                </div>
            </div>
        </div>

        <!-- SVG Shape -->
        <figure class="position-absolute bottom-0 right-0 left-0">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
                <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
            </svg>
        </figure>
        <!-- End SVG Shape -->
    </div>
    <!-- End Hero Section -->

    <!-- Contact Form Section -->
    <div class="container space-2 space-lg-3">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2>Nói cho chúng tôi vấn đề của bạn</h2>
            <p>Chúng tôi sẽ giải đáp mọi thắc mắc trong quá trình sử dụng hệ thống.</p>
        </div>
        <!-- End Title -->

        <div class="w-lg-80 mx-auto">
            <!-- Contacts Form -->
            <form class="js-validate">
                <div class="row">
                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label">Your name</label>
                            <input type="text" class="form-control" name="name" placeholder="Jeff Fisher" aria-label="Jeff Fisher" required
                                   data-msg="Please enter your name.">
                        </div>
                    </div>
                    <!-- End Input -->

                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label">Your email address</label>
                            <input type="email" class="form-control" name="email" placeholder="jackwayley@gmail.com" aria-label="jackwayley@gmail.com" required
                                   data-msg="Please enter a valid email address.">
                        </div>
                    </div>
                    <!-- End Input -->

                    <div class="w-100"></div>

                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label">Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="Web design" aria-label="Web design" required
                                   data-msg="Please enter a subject.">
                        </div>
                    </div>
                    <!-- End Input -->

                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label">Your phone number</label>
                            <input type="number" class="form-control" name="phone" placeholder="1-800-643-4500" aria-label="1-800-643-4500" required
                                   data-msg="Please enter a valid phone number.">
                        </div>
                    </div>
                    <!-- End Input -->
                </div>

                <!-- Input -->
                <div class="js-form-message mb-6">
                    <label class="input-label">How can we help you?</label>
                    <div class="input-group">
              <textarea class="form-control" rows="4" name="text" placeholder="Hi there, I would like to ..." aria-label="Hi there, I would like to ..." required
                        data-msg="Please enter a reason."></textarea>
                    </div>
                </div>
                <!-- End Input -->

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4">Submit</button>
                    <p class="small">We'll get back to you in 1-2 business days.</p>
                </div>
            </form>
            <!-- End Contacts Form -->
        </div>
    </div>
    <!-- End Contact Form Section -->

    <!-- Leaflet -->
    <div class="container-fluid mb-3">
        <div id="map" class="min-h-450rem rounded"
             data-hs-leaflet-options='{
             "map": {
               "scrollWheelZoom": false,
               "coords": [37.4040344, -122.0289704]
             },
             "marker": [
               {
                 "coords": [37.4040344, -122.0289704],
                 "icon": {
                   "iconUrl": "../../../../assets//svg/components/map-pin.svg",
                   "iconSize": [50, 45]
                 },
                 "popup": {
                   "text": "153 Williamson Plaza, Maggieberg"
                 }
               }
             ]
            }'></div>
    </div>
    <!-- End Leaflet -->
@endsection
