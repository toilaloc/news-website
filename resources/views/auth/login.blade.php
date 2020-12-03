@extends('frontend.layouts.others.index')
@section('title', 'F8News - Đăng nhập hệ thống')
@section('content')
    <div class="container space-1 space-lg-3">
        <form method="POST" action="{{ route('login') }}" class="js-validate w-md-75 w-lg-50 mx-md-auto">
            @csrf
            <!-- Title -->
            <div class="mb-5 mb-md-7">
                <h1 class="h2 mb-0">Chào mừng đến với hệ thống</h1>
                <p>Hãy đăng nhập để trải nghiệm đầy đủ tính năng.</p>
            </div>
            <!-- End Title -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Địa chỉ Email:</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrPassword">
                    <span class="d-flex justify-content-between align-items-center">
                        Mật khẩu:
                        @if (Route::has('password.request'))
                            <a class="link-underline text-capitalize font-weight-normal small text-muted"
                                href="{{ route('password.request') }}">Quên mật khẩu?</a>
                        @endif
                    </span>
                </label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="js-form-message form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label small text-muted" for="remember">
                        {{ __('Ghi nhớ đăng nhập') }}
                    </label>
                </div>
            </div>
            <!-- End Form Group -->

            <button type="submit" class="btn btn-sm btn-primary btn-block mb-2" href="#">
                <span class="d-flex justify-content-center align-items-center">

                    Đăng nhập
                </span>
            </button>
            <div class="text-center mb-3">
                <span class="divider divider-xs divider-text">Hoặc</span>
            </div>

            <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                <span class="d-flex justify-content-center align-items-center">
                <img class="mr-2" src="{{asset('img/600px-Facebook_Logo_(2019).png')}}" alt="Image Description" width="14"
                        height="14">

                    Đăng nhập bằng Facebook
                </span>
            </a>
            <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                <span class="d-flex justify-content-center align-items-center">
                <img class="mr-2" src="{{asset('img/google.svg')}}" alt="Image Description" width="14"
                        height="14">

                    Đăng nhập bằng Google
                </span>
            </a>
            <!-- Button -->
            <div class="text-center mb-5">
                    <span class="font-size-1 text-muted">Bạn chưa có tài khoản?</span>
                    <a class="font-size-1 font-weight-bold" href="{{ route('register') }}">Đăng ký</a>
            </div>
            <!-- End Button -->
        </form>
    </div>
    <!-- End Login Form -->
@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
