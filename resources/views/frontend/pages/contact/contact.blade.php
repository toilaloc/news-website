@extends('frontend.layouts.others.index')

@section('content')
<style>
.hotline-phone-ring-wrap {
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 999999;
}
.hotline-phone-ring {
  position: relative;
  visibility: visible;
  background-color: transparent;
  width: 110px;
  height: 110px;
  cursor: pointer;
  z-index: 11;
  -webkit-backface-visibility: hidden;
  -webkit-transform: translateZ(0);
  transition: visibility .5s;
  left: 0;
  bottom: 0;
  display: block;
}
.hotline-phone-ring-circle {
	width: 85px;
  height: 85px;
  top: 10px;
  left: 10px;
  position: absolute;
  background-color: transparent;
  border-radius: 100%;
  border: 2px solid #377dff;
  -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
  animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
  transition: all .5s;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  opacity: 0.5;
}
.hotline-phone-ring-circle-fill {
	width: 55px;
  height: 55px;
  top: 25px;
  left: 25px;
  position: absolute;
  background-color: rgb(26 207 255);
  border-radius: 100%;
  border: 2px solid transparent;
  -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
  animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
  transition: all .5s;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}
.hotline-phone-ring-img-circle {
	background-color: #3b89c5;
	width: 33px;
  height: 33px;
  top: 37px;
  left: 37px;
  position: absolute;
  background-size: 20px;
  border-radius: 100%;
  border: 2px solid transparent;
  -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
  animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
}
.hotline-phone-ring-img-circle .pps-btn-img {
	display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
.hotline-phone-ring-img-circle .pps-btn-img img {
	width: 20px;
	height: 20px;
}
.hotline-bar {
  position: absolute;
  background: rgb(55 125 255);
  height: 40px;
  width: 180px;
  line-height: 40px;
  border-radius: 3px;
  padding: 0 10px;
  background-size: 100%;
  cursor: pointer;
  transition: all 0.8s;
  -webkit-transition: all 0.8s;
  z-index: 9;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
  border-radius: 50px !important;
  /* width: 175px !important; */
  left: 33px;
  bottom: 37px;
}
.hotline-bar > a {
  color: #fff;
  text-decoration: none;
  font-size: 15px;
  font-weight: bold;
  text-indent: 50px;
  display: block;
  letter-spacing: 1px;
  line-height: 40px;
  font-family: Arial;
}
.hotline-bar > a:hover,
.hotline-bar > a:active {
  color: #fff;
}
@-webkit-keyframes phonering-alo-circle-anim {
  0% {
    -webkit-transform: rotate(0) scale(0.5) skew(1deg);
    -webkit-opacity: 0.1;
  }
  30% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    -webkit-opacity: 0.5;
  }
  100% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
    -webkit-opacity: 0.1;
  }
}
@-webkit-keyframes phonering-alo-circle-fill-anim {
  0% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    opacity: 0.6;
  }
  50% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
    opacity: 0.6;
  }
  100% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    opacity: 0.6;
  }
}
@-webkit-keyframes phonering-alo-circle-img-anim {
  0% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
  10% {
    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
  }
  20% {
    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
  }
  30% {
    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
  }
  40% {
    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
  }
  50% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
  100% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
}
@media (max-width: 768px) {
  .hotline-bar {
    display: none;
  }
}
</style>
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
                                    <img class="img-fluid" src="{{asset('/admin/assets//svg/icons/icon-44.svg')}}" alt="SVG">
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
        
        @if(session()->get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
            <!-- Contacts Form -->
            <form class="js-validate" action="{{url('frontend/contacts')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label">Tên của bạn</label>
                            <input type="text" class="form-control" name="contact_name" placeholder="Tên của bạn" aria-label="Tên của bạn" required
                                   data-msg="Làm ơn nhập tên của bạn.">
                        </div>
                    </div>
                    <!-- End Input -->

                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label">Địa chỉ email</label>
                            <input type="email" class="form-control" name="contact_email" placeholder="Địa chỉ email" aria-label="Địa chỉ email" required
                                   data-msg="Làm ơn nhập địa chỉ email.">
                        </div>
                    </div>
                    <!-- End Input -->

                    <div class="w-100"></div>

                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label">Tiều đề</label>
                            <input type="text" class="form-control" name="contact_title" placeholder="Tiêu đề" aria-label="Tiêu đề" required
                                   data-msg="Làm ơn nhập tiêu đề.">
                        </div>
                    </div>
                    <!-- End Input -->

                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label">Số điện thoại</label>
                            <input type="number" class="form-control" name="contact_phone" placeholder="+84 1111 1111 1" aria-label="+84 1111 1111 1" required
                                   data-msg="Làm ơn nhập đúng số điệ thoại.">
                        </div>
                    </div>
                    <!-- End Input -->
                </div>
                <!-- Input -->
                @guest
                @else
                <div class="col-sm-6 mb-4" style="padding-left: 0;">
                    <div class="js-form-message">
                        <label class="input-label">User info</label>
                        <select class="form-control"  name="user_id" >
                            <option value="{{Auth::user()->id}}">{{Auth::user()->fullname}}</option>
                        </select>
                    </div>
                </div>
                @endguest
                <!-- End Input -->
                
                <!-- Input -->
                <div class="js-form-message mb-6">
                    <label class="input-label">How can we help you?</label>
                    <div class="input-group">
              <textarea class="form-control" rows="4" name="contact_message" placeholder="Hi there, I would like to ..." aria-label="Hi there, I would like to ..." required
                        data-msg="Please enter a reason."></textarea>
                    </div>
                </div>
                <!-- End Input -->

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4">Submit</button>
                    <p class="small">Chúng tôi sẽ trả lời bạn trong vòng 1-2 ngày.</p>
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
    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
            <a href="tel:0376637703" class="pps-btn-img">
                <img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại" width="50">
            </a>
            </div>
        </div>
        <div class="hotline-bar">
            <a href="tel:0376637703">
                <span class="text-hotline">037 6637 703</span>
            </a>
        </div>
    </div>
@endsection
