@extends('frontend.layouts.others.index')

@section('content')
    <!-- Login Form -->
    <div class="container space-2 space-lg-3">
        <form class="js-validate w-md-75 w-lg-50 mx-md-auto">
            <!-- Title -->
            <div class="mb-5 mb-md-7">
                <h1 class="h2 mb-0">Bạn quên mật khẩu?</h1>
                <p>Hãy nhập địa chỉ Email vào biểu mẫu bên dưới để lấy mật khẩu.</p>
            </div>
            <!-- End Title -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Địa chỉ Email</label>
                <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email address" aria-label="Email address" required
                       data-msg="Please enter a valid email address.">
            </div>
            <!-- End Form Group -->

            <!-- Button -->
            <div class="row align-items-center mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <a class="font-size-1 font-weight-bold" href="login-simple.html"><i class="fas fa-angle-left fa-sm mr-1"></i>Đăng nhập</a>
                </div>

                <div class="col-sm-6 text-sm-right">
                    <button type="submit" class="btn btn-primary transition-3d-hover">Lấy lại mật khẩu</button>
                </div>
            </div>
            <!-- End Button -->
        </form>
    </div>
    <!-- End Login Form -->
@endsection
