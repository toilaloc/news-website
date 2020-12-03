@extends('frontend.layouts.others.index')
@section('title', 'F8News - Đăng ký thành viên')
@section('content')
    <!-- Login Form -->
    <div class="container space-2 space-lg-3">
        <form class="js-validate w-md-75 w-lg-50 mx-md-auto">
            <!-- Title -->
            <div class="mb-5 mb-md-7">
                <h1 class="h2 mb-0">Chào mừng bạn đến với hệ thống</h1>
                <p>Điền vào biểu mẫu để tiến hành đăng ký.</p>
            </div>
            <!-- End Title -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Địa chỉ Email:</label>
                <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email address" aria-label="Email address" required
                       data-msg="Please enter a valid email address.">
            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrPassword">Mật khẩu:</label>
                <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="********" aria-label="********" required
                       data-msg="Your password is invalid. Please try again.">
            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrConfirmPassword">Nhập lại mật khẩu:</label>
                <input type="password" class="form-control" name="confirmPassword" id="signinSrConfirmPassword" placeholder="********" aria-label="********" required
                       data-msg="Password does not match the confirm password.">
            </div>
            <!-- End Form Group -->

            <!-- Checkbox -->
            <div class="js-form-message mb-5">
                <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required
                           data-msg="Please accept our Terms and Conditions.">
                    <label class="custom-control-label" for="termsCheckbox">
                        <small>
                            Tôi đồng ý với
                            <a class="link-underline" href="../pages/terms.html">Điều khoản và quy định</a>
                            của hệ thống.
                        </small>
                    </label>
                </div>
            </div>
            <!-- End Checkbox -->

            <!-- Button -->
            <div class="row align-items-center mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <span class="font-size-1 text-muted">Đã có tài khoản?</span>
                    <a class="font-size-1 font-weight-bold" href="login-simple.html">Đăng nhập</a>
                </div>

                <div class="col-sm-6 text-sm-right">
                    <button type="submit" class="btn btn-primary transition-3d-hover">Đăng ký</button>
                </div>
            </div>
            <!-- End Button -->
        </form>
    </div>
    <!-- End Login Form -->
@endsection
