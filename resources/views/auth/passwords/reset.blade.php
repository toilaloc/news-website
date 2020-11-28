@extends('frontend.layouts.others.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-9">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h5 class="card-title">Mât khẩu</h5>
                    </div>

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Form -->
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Email:</label>

                                <div class="col-sm-9">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                        autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="newPassword" class="col-sm-3 col-form-label input-label">Mật khẩu mới</label>

                                <div class="col-sm-9">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="confirmNewPasswordLabel" class="col-sm-3 col-form-label input-label">Xác nhận
                                    mật khẩu mới</label>

                                <div class="col-sm-9">
                                    <div class="mb-3">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <h5>Yêu cầu mật khẩu:</h5>

                                    <p class="card-text font-size-1">Đảm bảo rằng các yêu cầu này được đáp ứng:</p>

                                    <ul class="font-size-1">
                                        <li>Độ dài tối thiểu 8 ký tự - càng nhiều, càng tốt</li>
                                        <li>Ít nhất một ký tự viết thường</li>
                                        <li>Ít nhất một ký tự viết hoa</li>
                                        <li>Ít nhất một số, ký hiệu hoặc ký tự khoảng trắng</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cập nhật mật khẩu') }}
                                </button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->



                <!-- edit -->



            </div>
        </div>
    </div>
@endsection
