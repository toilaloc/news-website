@extends('frontend.layouts.others.index')
@section('title', 'F8News - Lấy lại mật khẩu')
@section('content')
    <!-- Login Form -->
    <div class="container space-2 space-lg-3">
        <form class="js-validate w-md-75 w-lg-50 mx-md-auto" method="POST" action="{{ route('password.email') }}">
            @csrf
            <!-- Title -->
            <div class="mb-5 mb-md-7">
                <h1 class="h2 mb-0">Bạn quên mật khẩu?</h1>
                <p>Hãy nhập địa chỉ Email vào biểu mẫu bên dưới để lấy mật khẩu.</p>

                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            </div>
            <!-- End Title -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Địa chỉ Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <!-- End Form Group -->

            <!-- Button -->
            <div class="row align-items-center mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                <a class="font-size-1 font-weight-bold" href="{{route('login')}}"><i class="fas fa-angle-left fa-sm mr-1"></i>Đăng nhập</a>
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

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}