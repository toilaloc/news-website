@extends('admin.layouts.index')
@section('title', "Quản lý hệ thống tin tức")
@section('content')
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          @foreach(Auth::user()->Roles as $roleUser)
          
          <div class="row">
            @if($roleUser->id == 1 || $roleUser->id == 2)
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng người dùng</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user->count()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tổng bài viết</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$post->count()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tổng bình Luận</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$comment->count()}}</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comment fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tổng báo cáo</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$report->count()}}</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-flag fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
              @else
               <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bài viết của tôi</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$myPosts->count()}}</div>
                    <div class="h6 mb-0 font-weight-bold text-gray-800">{{$myPostApprovaling->count()}} bài đang duyệt</div>  
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Vi phạm của tôi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$myReposts->count()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Bình Luận của tôi</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$myComment->count()}}</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comment fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              @endif
          </div>
        
          

            <!-- Pending Requests Card Example -->
          

          <!-- Content Row -->
          @if($roleUser->id == 1 || $roleUser->id == 2)
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <style>
            .mod-avatar {
              position: relative;
              display: inline-block;
              width: 2.625rem;
              height: 2.625rem;
              border-radius: .3125rem;
            }
          </style>
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Bài viết mới</h6>
                </div>
                <div class="card-body">
                  @foreach($newPosts as $newPost)
                  <div class="mb-2 border-bottom pb-2">
                  <a class="d-flex align-items-center" href="{{url('post',$newPost->slug)}}">
                      <img class="mod-avatar" src="{{asset('uploads/posts/thumbnail/'.$newPost->thumbnail)}}" alt="Image Description">
                      <div class="ml-3">
                        <span style="font-size: .875rem; color: #1e2022;" class="d-block h5 text-hover-primary mb-0">{{$newPost->name}} <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Earned extra bonus"></i></span>
                        <span style="color: #677788!important; font-size: .8125rem;" class="d-block font-size-sm text-body">Đăng vào {{$newPost->created_at}}</span>
                      </div>
                    </a>
                  </div>
                  @endforeach
                </div>
              </div>


              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Bình luận mới</h6>
                </div>
                <div class="card-body pt-0">
                  <div class="my-3 p-2 bg-white rounded box-shadow">
                    
                    @foreach($newComments as $newComment)
                    <div class="media text-muted">
                    <img data-src="{{asset('uploads/users/'.$newComment->Author->thumbnail)}}" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="{{asset('uploads/users/'.$newComment->Author->thumbnail)}}" data-holder-rendered="true">
                      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">{{$newComment->Author->fullname}}</strong>
                        <em>"{{$newComment->content}}"</em> - vào {{$newComment->created_at}}
                      </p>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Người dùng mới</h6>
                </div>
                <div class="card-body pt-0">
                  <div class="my-3 p-3 bg-white rounded box-shadow">
                    @foreach($newUsers as $newUser)
                    <div class="media text-muted ">
                    <img data-src="{{asset('uploads/users/'.$newUser->thumbnail)}}" alt="32x32" class="mr-2 rounded" src="{{asset('uploads/users/'.$newUser->thumbnail)}}" data-holder-rendered="true" style="width: 32px; height: 32px;">
                      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">{{$newUser->fullname}}</strong>
                        <a href="{{url('author', $newUser->username)}}">Xem trang cá nhân</a>
                        </div>
                      <span class="d-block">{{"@"}}{{$newUser->username}}</span>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Báo cáo mới</h6>
                </div>
                <div class="card-body">
                  <ul class="list-group">
                   @foreach($newReports as $newReport)
                  <li class="list-group-item">
                    <a href="{{url('author',$newReport->Reporter->username)}}">{{$newReport->Reporter->fullname}}</a> đã report 
                    @if(isset($newReport->post_id) && $newReport->type == "post") {{"bài viết"}} "<a href="{{url('post',$newReport->Post->slug)}}">{{$newReport->Post->name}}</a>" @endif
                    @if(isset($newReport->user_id) && $newReport->type == "user") {{"người dùng"}} {{$newReport->User->fullname}} @endif
                    @if(isset($newReport->comment_id) && $newReport->type == "comment") {{"bình luận"}} "{{$newReport->reportComment->content}}" @endif
                  </li>
                  @endforeach
                  </ul>
                </div>
              </div>

            </div>
          </div>
          @endif
          @endforeach
@endsection