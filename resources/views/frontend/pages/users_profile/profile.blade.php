@extends('frontend.layouts.others.index')
@section('title', "Thông tin tài khoản ". $user->fullname)
@section('content')
    <!-- Breadcrumb Section -->
    <div class="bg-navy" style="background-image: url({{asset('frontend/assets/svg/components/abstract-shapes-20.svg')}});">
        <div class="container space-1 space-top-lg-2 space-bottom-lg-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-none d-lg-block">
                        <h1 class="h2 text-white">Thông tin cá nhân</h1>
                    </div>

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb breadcrumb-light breadcrumb-no-gutter mb-0">
                        <li class="breadcrumb-item">Tài khoản</li>
                        <li class="breadcrumb-item active" aria-current="page">Thông tin cá nhân</li>
                    </ol>
                    <!-- End Breadcrumb -->
                </div>

                <div class="col-auto">
                    <div class="d-none d-lg-block">
                        <a class="btn btn-sm btn-soft-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                    </div>

                    <!-- Responsive Toggle Button -->
                    <button type="button" class="navbar-toggler btn btn-icon btn-sm rounde-circle d-lg-none" aria-label="Toggle navigation" aria-expanded="false" aria-controls="sidebarNav" data-toggle="collapse" data-target="#sidebarNav">
              <span class="navbar-toggler-default">
                <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
                </svg>
              </span>
                        <span class="navbar-toggler-toggled">
                <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
                </svg>
              </span>
                    </button>
                    <!-- End Responsive Toggle Button -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Section -->


  

    <div class="container space-1 space-top-lg-0 mt-lg-n10">
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
        @if(session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </button>
          </div>
          @endif   
        <div class="row">
            <div class="col-lg-3">
                <!-- Navbar -->
                <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
                    <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
                        <!-- Card -->
                        <div class="card mb-5">
                            <div class="card-body">
                                <!-- Avatar -->
                                <div class="d-none d-lg-block text-center mb-5">
                                    <div class="avatar avatar-xxl avatar-circle mb-3">
                                    <img class="avatar-img w-100" src="{{asset('uploads/users')}}/{{$user->thumbnail}}" alt="{{$user->fullname}}">
                                        <img class="avatar-status avatar-lg-status" src="{{asset('frontend/assets/svg/illustrations/top-vendor.svg')}}" data-toggle="tooltip" data-placement="top" title="Verified user">
                                    </div>

                                <h4 class="card-title">{{$user->name}}</h4>
                                <p class="card-text font-size-1">{{$user->email}}</p>
                                </div>
                                <!-- End Avatar -->

                                <h6 class="text-cap small">Tài khoản</h6>

                                <!-- List -->
                                <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2 mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">
                                            <i class="fas fa-id-card nav-icon"></i> Thông tin cá nhân
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{url('/change-password',$user->username)}}">
                                            <i class="fas fa-shield-alt nav-icon"></i> Đổi mật khẩu
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{url('author',$user->username)}}">
                                            <i class="fas fa-chart-line nav-icon"></i> Hoạt động
                                        </a>
                                    </li>
    
                                </ul>
                                <!-- End List -->

                                <h6 class="text-cap small">Theo dõi</h6>

                                <!-- List -->
                                <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:;">
                                            <i class="fas fa-users nav-icon"></i> Đang theo dõi
                                            <span class="badge badge-soft-navy badge-pill nav-link-badge">{{$user->Following->count()}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:;">
                                            <i class="fas fa-user-friends nav-icon"></i> Người theo dõi
                                            <span class="badge badge-soft-navy badge-pill nav-link-badge">{{$user->hasFollowers->count()}}</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End List -->

                                <div class="d-lg-none">
                                    <div class="dropdown-divider"></div>

                                    <!-- List -->
                                    <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                                        <li class="nav-item">
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                         </form>
                                            <a class="nav-link text-primary" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt nav-icon"></i> Đăng xuất
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
                <!-- End Navbar -->
            </div>

            <div class="col-lg-9">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h5 class="card-title">Thông tin cơ bản</h5>
                    </div>

                    <!-- Body -->
                    <div class="card-body">
                    <form method="POST" action="{{route('userfront.update',$user->username)}}" enctype="multipart/form-data">
                          @csrf
                          @method('PATCH')
                            <div class="row form-group">
                                <label class="col-sm-3 col-form-label input-label">Ảnh hồ sơ</label>

                                <div class="col-sm-9">
                                    <div class="media align-items-center">
                                        <label class="avatar avatar-xl avatar-circle mr-4" for="avatarUploader">
                                        <img id="avatarImg" class="avatar-img w-100" src="{{asset('uploads/users')}}/{{$user->thumbnail}}" alt="{{$user->fullname}}">
                                        </label>

                                        <div class="media-body">
                                            <div class="btn btn-sm btn-primary file-attachment-btn mb-2 mb-sm-0 mr-2">Tải ảnh lên
                                                <input type="file" name="thumbnail" class="js-file-attach file-attachment-btn-label" id="avatarUploader" data-hs-file-attach-options='{
                                    "textTarget": "#avatarImg",
                                    "mode": "image",
                                    "targetAttr": "src"
                                 }'>
                                            </div>

                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Họ và tên <i class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="fullname" id="firstNameLabel" placeholder="Clarice" aria-label="Clarice" value="{{$user->fullname}}">
                                    </div>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" id="emailLabel" placeholder="clarice@example.com" aria-label="clarice@example.com" value="{{$user->email}}">
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="js-add-field row form-group" data-hs-add-field-options='{
                        "template": "#addPhoneFieldTemplate",
                        "container": "#addPhoneFieldContainer",
                        "defaultCreated": 0
                      }'>
                                <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Điện thoại <span class="input-label-secondary">(Optional)</span></label>

                                <div class="col-sm-9">
                                    <div class="input-group align-items-center">
                                        <input type="text" class="js-masked-input form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" value="{{$user->phone}}" data-hs-mask-options='{
                               "template": "+0(000)000-00-00"
                             }'>
                                    </div>

                                    <!-- Container For Input Field -->
                                    <div id="addPhoneFieldContainer"></div>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- End Add Phone Input Field -->

                            <!-- Form Group -->
                            <div class="row form-group">
                                <label class="col-sm-3 col-form-label input-label">Giới tính</label>

                                <div class="col-sm-9">
                                    <div class="input-group input-group-md-down-break">
                                        <!-- Custom Radio -->
                                        <div class="form-control">
                                            <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="gender" id="genderTypeRadio1" value="0" @if($user->gender == 0) {{"checked"}} @endif>
                                                <label class="custom-control-label" for="genderTypeRadio1">Nam</label>
                                            </div>
                                        </div>
                                        <!-- End Custom Radio -->

                                        <!-- Custom Radio -->
                                        <div class="form-control">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="gender" id="genderTypeRadio2" value="1"  @if($user->gender == 1) {{"checked"}} @endif>
                                                <label class="custom-control-label" for="genderTypeRadio2">Nữ</label>
                                            </div>
                                        </div>
                                        <!-- End Custom Radio -->

                                        <!-- Custom Radio -->
                                        <div class="form-control">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="gender" id="genderTypeRadio3" value="NULL"  @if($user->gender != 0 && $user->gender != 1) {{"checked"}} @endif>
                                                <label class="custom-control-label" for="genderTypeRadio3">Khác</label>
                                            </div>
                                        </div>
                                        <!-- End Custom Radio -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <div class="row form-group">
                                <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Địa chỉ</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="address" placeholder="Your address" aria-label="Your address" value="{{$user->address}}">
                                </div>
                            </div>

                            <!-- Form Group -->
                            <div class="row form-group">
                                <label class="col-sm-3 col-form-label input-label">BIO</label>
                                <div class="col-sm-9">
                                <textarea name="bio" class="form-control" cols="30" rows="3">{{$user->bio}}</textarea>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
        
                        
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer d-flex justify-content-end">
                        <a class="btn btn-white" href="javascript:;">Hủy bỏ</a>
                        <span class="mx-2"></span>
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                    <!-- End Footer -->
                </form>
                </div>
                <!-- End Card -->


                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h5 class="card-title">Riêng tư</h5>
                    </div>

                    <!-- Body -->
                    <div class="card-body">
                        <form>
                            <!-- Form Group -->
                            <div class="row form-group">
                                <div class="col-sm-3">
                                    <span class="d-block font-size-1 mb-2">Ai có thể xem ảnh hồ sơ của bạn? <i class="far fa-question-circle" data-toggle="tooltip" data-placement="top" title="Your visibility setting only applies to your profile photo. Your header image is always visible to anyone."></i></span>
                                </div>
 <input type="hidden" name="ajaxLoadStatus" value="{{route('ajax.loadStatus')}}" />
                                      
                                <div class="col-sm-9 resDataStatus">
                                    <!-- Select -->
                                    <div class="select2-custom">
                                        <select class="js-custom-select status-select form-control" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "customClass": "custom-select"
                              }'>
                                            <option  value="0" data-option-template='<span class="media"><i class="fas fa-globe-americas text-body mt-1 mr-2"></i><span class="media-body"><span class="d-block">Anyone</span><small class="select2-custom-hide">Visible to anyone who can view your content. Accessible by installed apps.</small></span></span>' @if($user->status == 0) {{"selected"}} @endif>Công khai</option>
                                            <option value="1" data-option-template='<span class="media"><i class="fas fa-user-lock text-body mt-1 mr-2"></i><span class="media-body"><span class="d-block">Only you</span><small class="select2-custom-hide">Only visible to you.</small></span></span>' @if($user->status == 1) {{"selected"}} @endif>Riêng tư</option>
                                         </select>
                                    </div>
                                <script src="{{asset('frontend/assets/js/load-status.js')}}"></script>
                                    <!-- End Select -->
                                </div>
                            </div>
                            <!-- End Form Group -->
                        </form>
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                {{-- <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Xóa tài khoản của bạn</h5>
                    </div>

                    <!-- Body -->
                    <div class="card-body">
                        <p class="card-text">Khi bạn xóa tài khoản của mình, bạn sẽ mất quyền truy cập vào các dịch vụ tài khoản Front và chúng tôi sẽ xóa vĩnh viễn dữ liệu cá nhân của bạn. Bạn có thể hủy xóa trong 14 ngày.</p>

                        <div class="form-group">
                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="deleteAccountCheckbox">
                                <label class="custom-control-label" for="deleteAccountCheckbox">Xác nhận rằng tôi muốn xóa tài khoản của mình.</label>
                            </div>
                            <!-- End Custom Checkbox -->
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-danger transition-3d-hover">Xóa bỏ</button>
                        </div>
                    </div>
                    <!-- End Body -->
                </div> --}}
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Content Section -->
@endsection
