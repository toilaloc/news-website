@extends('frontend.layouts.others.index')

@section('content')
    <!-- Login Form -->
    <div class="container space-2 space-lg-3">

        <form class="js-validate w-md-75 w-lg-75 mx-md-auto" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <!-- Title -->
            <div class="mb-5 mb-md-7">
                <h1 class="h2 mb-0">Chào mừng bạn đến với hệ thống</h1>
                <p>Điền vào biểu mẫu để tiến hành đăng ký.</p>

                @if ($errors->any())
                @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">   
            {{ $error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </button>
          </div>
          @endforeach
          @endif
            </div>
           
            <!-- End Title -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Tên đăng nhập:</label>
                       <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autofocus>
                       @error('username')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
            </div>
            <!-- End Form Group -->

             <!-- Form Group -->
             <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Tên đầy đủ:</label>
                       <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" autofocus>
                       @error('fullname')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
            </div>
            <!-- End Form Group -->

             <!-- Form Group -->
             <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Email:</label>
                       <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                       @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
            </div>
            <!-- End Form Group -->
            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrPassword">Mật khẩu:</label>
                <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="********" aria-label="********" 
                       data-msg="Your password is invalid. Please try again.">
            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrConfirmPassword">Nhập lại mật khẩu:</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" data-msg="Password does not match the confirm password.">
            </div>

             <!-- Form Group -->
             <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Ảnh đại diện:</label>
                       <input id="thumbnail" type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail" value="{{ old('thumbnail') }}" autocomplete="thumbnail" autofocus>
                       @error('thumbnail')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
            </div>

             <!-- Form Group -->
             <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Địa chỉ:</label>
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" autofocus>

                @error('address')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Số điện thoại:</label>
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus>

                @error('phone')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Giới tính:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" @error('gender') is-invalid @enderror type="radio" name="gender" value="0">
                    <label class="form-check-label">Nam</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" @error('gender') is-invalid @enderror type="radio" name="gender"value="1">
                    <label class="form-check-label">Nữ</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" @error('gender') is-invalid @enderror type="radio" name="gender">
                    <label class="form-check-label">Khác</label>
                  </div>
                @error('gender')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <!-- End Form Group -->


              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Giới thiệu bản thân:</label>
                <textarea class="form-control" name="bio" id="bio"  @error('bio') is-invalid @enderror cols="30" rows="3"></textarea>
                                
                @error('bio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- End Form Group -->
            <!-- End Form Group -->
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
                    <a class="font-size-1 font-weight-bold" href="{{route('login')}}">Đăng nhập</a>
                </div>

                <div class="col-sm-6 text-sm-right">
                    <button type="submit" class="btn btn-primary transition-3d-hover">Đăng ký</button>
                </div>
            </div>
            <!-- End Button -->
        </form>
    </div>
    <!-- End Login Form -->


{{-- 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Đăng ký') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tên đăng nhập') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fullname" class="col-md-4 col-form-label text-md-right">{{ __('Họ và tên') }}</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Địa chỉ E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Nhập lại mật khẩu') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Số điện thoại') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Địa chỉ') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Giới thiệu') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="bio" id="bio"  @error('bio') is-invalid @enderror cols="30" rows="3"></textarea>
                                
                                @error('bio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Giới tính') }}</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" @error('gender') is-invalid @enderror type="radio" name="gender" value="0">
                                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" @error('gender') is-invalid @enderror type="radio" name="gender" id="inlineRadio2" value="1">
                                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" @error('gender') is-invalid @enderror type="radio" name="gender" id="inlineRadio2">
                                    <label class="form-check-label" for="inlineRadio2">Khác</label>
                                  </div>
                               
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ảnh đại diện') }}</label>
    
                                <div class="col-md-6">
                                    <input id="thumbnail"  class="form-control" type="file" @error('thumbnail') is-invalid @enderror name="thumbnail">
    
                                    @error('thumbnail')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                

                        <div class="form-group row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Đăng ký') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection