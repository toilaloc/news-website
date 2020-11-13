@extends('frontend.layouts.others.index')

@section('content')
    <div class="container space-2 space-lg-3">
        <form class="js-validate w-md-75 w-lg-50 mx-md-auto">
            <!-- Title -->
            <div class="mb-5 mb-md-7">
                <h1 class="h2 mb-0">Chào mừng đến với hệ thống</h1>
                <p>Hãy đăng nhập để trải nghiệm đầy đủ tính năng.</p>
            </div>
            <!-- End Title -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Email:</label>
                <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Địa chỉ Email" aria-label="Email address" required
                       data-msg="Please enter a valid email address.">
            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrPassword">
            <span class="d-flex justify-content-between align-items-center">
              Mật khẩu:
              <a class="link-underline text-capitalize font-weight-normal" href="recover-account-simple.html">Quên mật khẩu?</a>
            </span>
                </label>
                <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="********" aria-label="********" required
                       data-msg="Your password is invalid. Please try again.">
            </div>
            <!-- End Form Group -->

            <!-- Button -->
            <div class="row align-items-center mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <span class="font-size-1 text-muted">Bạn chưa có tài khoản?</span>
                    <a class="font-size-1 font-weight-bold" href="signup-simple.html">Đăng ký</a>
                </div>

                <div class="col-sm-6 text-sm-right">
                    <button type="submit" class="btn btn-primary transition-3d-hover">Đăng nhập</button>
                </div>
            </div>
            <!-- End Button -->
        </form>
    </div>
    <!-- End Login Form -->
@endsection
