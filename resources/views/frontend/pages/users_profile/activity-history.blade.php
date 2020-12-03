@extends('frontend.layouts.others.index')
@section('title', "Tác giả ". $user->fullname)
@section('content')
    <!-- Profile Section -->
    <div class="container space-top-1 space-top-sm-2 space-bottom-2">
        <div class="row">
          <div id="stickyBlockStartPoint" class="col-md-5 col-lg-4 mb-7 mb-md-0"  style="top: 0px !important; z-index:9999 !important;">
            <div class="js-sticky-block card border p-4"
                 data-hs-sticky-block-options='{
                   "parentSelector": "#stickyBlockStartPoint",
                   "breakpoint": "md",
                   "startPoint": "#stickyBlockStartPoint",
                   "endPoint": "#stickyBlockEndPoint",
                   "stickyOffsetTop": -120,
                   "stickyOffsetBottom": -120
                 }'>

              <div class="text-center">
                <!-- User Content -->
              <img style="height: 120px;" class="img-fluid rounded-circle mx-auto" src="{{asset('uploads/users')}}/{{$user->thumbnail}}" alt="Image Description" width="120" height="120">
  
              <span class="d-block text-body font-size-1 mt-3">Tham gia kể từ {{$user->created_at->diffForHumans($dateTime)}}</span>
  
              
                <!-- End User Content -->
              </div>
  
              <div class="border-top pt-4 mt-4">
                <div class="row">
                  <div class="col-6 col-md-12 col-lg-6 mb-4">
                    <!-- Icon Block -->
                    <div class="media">
                      <div class="d-flex">
                        <span class="avatar avatar-xs mr-3">
                          <img class="avatar-img" src="{{asset('frontend/assets/svg/illustrations/review-rating-shield.svg')}}" alt="Image Description">
                        </span>
                        <span class="text-body font-size-1 mt-1">{{$user->hasComments->count()}} Bình luận</span>
                      </div>
                    </div>
                    <!-- End Icon Block -->
                  </div>
  
                  <div class="col-6 col-md-12 col-lg-6 mb-4">
                    <!-- Icon Block -->
                    <div class="d-flex">
                      <span class="avatar avatar-xs mr-3">
                        <img class="avatar-img" src="{{asset('frontend/assets/svg/illustrations/star.svg')}}" alt="Image Description">
                      </span>
                      <span class="text-body font-size-1 mt-1">4.87 đánh giá</span>
                    </div>
                    <!-- End Icon Block -->
                  </div>
  
                  <div class="col-6 col-md-12 col-lg-6 mb-4 col-6 col-md-12 mb-lg-0">
                    <!-- Icon Block -->
                    <div class="d-flex">
                      <span class="avatar avatar-xs mr-3">
                        <img class="avatar-img" src="{{asset('frontend/assets/svg/illustrations/medal.svg')}}" alt="Image Description">
                      </span>
                      <span class="text-body font-size-1 mt-1">
                        @foreach($user->roles as $roles)
                        @if($roles->pivot->role_id == 1)
                        {{"Quản trị viên"}}
                        @endif
                        @if($roles->pivot->role_id == 2)
                        {{"Quản lý"}}
                        @endif
                        @if($roles->pivot->role_id == 3)
                        {{"Tác giả"}}
                        @endif
                        @if($roles->pivot->role_id == 4)
                        {{"Người đọc"}}
                        @endif
                        @endforeach
                      </span>
                    </div>
                    <!-- End Icon Block -->
                  </div>
  
                  <div class="col-6 col-md-12 col-lg-6">
                    <!-- Icon Block -->
                    <div class="d-flex">
                      <span class="avatar avatar-xs mr-3">
                        <img class="avatar-img" src="{{asset('frontend/assets/svg/illustrations/add-file.svg')}}" alt="Image Description">
                      </span>
                      <span class="text-body font-size-1 mt-1">{{$user->infoPosts->count()}} Bài viết</span>
                    </div>
                    <!-- End Icon Block -->
                  </div>
                </div>
              </div>
  
              <div class="border-top pt-4 mt-4">
                <h1 class="h4 mb-4">Bạn bè</h1>
  
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 mb-2">
                        <a class="media" href="#">
                          <div class="icon icon-xs icon-soft-secondary mr-3">
                            <i class="pl-1 fas fa-user-friends nav-icon"></i>
                          </div>
                          <div class="media-body">
                            <span class="d-inline font-size-1 font-weight-bold" data-toggle="modal" data-target="#staticBackdrop">Người theo dõi</span>
                          <span class="badge badge-soft-navy badge-pill nav-link-badge">{{$user->hasFollowers->count()}}</span>
                          </div>
                        </a>
                        <!-- End Social Profiles -->
                      </div>
                  <div class="col-12 col-md-12 col-lg-12">
                    <a class="media" href="#">
                      <div class="icon icon-xs icon-soft-secondary mr-3">
                        <i class="pl-1 fas fa-users nav-icon"></i>
                      </div>
                      <div class="media-body">
                        <span  class="d-inline font-size-1 font-weight-bold" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop1">Đang theo dõi</span>
                        <span class="badge badge-soft-navy badge-pill nav-link-badge" >{{$user->Following->count()}}</span>
                      </div>
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop1" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Đang theo dõi</h5>
                          </div>
                          <div class="modal-body">
                           @foreach($user->Following as $following)  
                           @foreach(App\Models\Users::all()->where('id', $following->author_id) as $follow)
                           <div class="d-flex align-items-center mr-4">
                            <div class="avatar-group">
                              <span class="avatar avatar-xs avatar-circle">
                                <img class="avatar-img w-100" src="{{asset('uploads/users/')}}/{{$follow->thumbnail}}" alt="Image Description">
                              </span>
                            </div>
                            <span class="pl-2"><a class="link-underline" href="{{url('author', $follow->username)}}">{{$follow->fullname}}</a></span>
                            
                          </div> 
                                   @endforeach       
                            @endforeach
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Người theo dõi</h5>
                          </div>
                          <div class="modal-body">
                           @foreach($user->hasFollowers as $followers)  
                           @foreach(App\Models\Users::where('id',$followers->user_id)->get() as $follower)
                           <div class="d-flex align-items-center mr-4">
                            <div class="avatar-group">
                              <span class="avatar avatar-xs avatar-circle">
                                <img class="avatar-img w-100" src="{{asset('uploads/users/')}}/{{$follower->thumbnail}}" alt="Image Description">
                              </span>
                            </div>
                          <span class="pl-2"><a class="link-underline" href="{{url('author',$follower->username)}}">{{$follower->fullname}}</a></span>
                          </div>     
                             @endforeach      
                            @endforeach
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Social Profiles -->
                  </div>
                </div>
              </div>
  
              <div class="border-top text-center pt-4 mt-4">
                <a class="text-body small"data-toggle="modal" data-target="#modalReportUser" href="javascript:;">
                  <i class="far fa-flag mr-1"></i> Báo cáo vi phạm
                </a>
              </div>
              
              <div id="modalReportUser" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalTopCoverTitle" aria-hidden="true" style="display: none; z-index: 1 !important;">
                <div class="modal-dialog modal-dialog-centered" role="document" style="z-index: 0 !important;">
                  <div class="modal-content">
                    <!-- Header -->
                    <div class="modal-top-cover bg-primary text-center">
                      <figure class="position-absolute right-0 bottom-0 left-0">
                        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                          <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                        </svg>
                      </figure>

                      <div class="modal-close">
                        <button type="button" class="btn btn-icon btn-sm btn-ghost-light" data-dismiss="modal" aria-label="Close">
                          <svg width="16" height="16" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"></path>
                          </svg>
                        </button>
                      </div>
                    </div>
                    <!-- End Header -->

                    <div class="modal-top-cover-avatar">
                      <img class="avatar avatar-lg avatar-circle avatar-border-lg avatar-centered shadow-soft" src="{{asset('frontend/assets/svg/brands/front.svg')}}" alt="Logo">
                    </div>

                    <div class="modal-body content-report">
                    
                        <div class="form-group">
                            <form action="{{route('reporting.store')}}" method="post">
                                @csrf
                                <input type="hidden" name="type" value="user" />
                            <input type="hidden" name="user_id" value="{{$user->id}}" />
                            <input type="hidden" name="reporter_id" value=" @if(Auth::check()){{Auth::user()->id}} @endif" />
        
                            <label for="">Lý do báo cáo:</label>
                             <textarea id="my-textarea" class="form-control" name="reason" rows="3" required></textarea>
                        </div>
                    
                        <button type="submit" class="btn btn-sm btn-primary float-right send-report">Báo cáo</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-md-7 col-lg-8">
            <div class="ml-lg-6">
              <div class="mb-3 mb-sm-0 mr-2">
              <h2>{{$user->fullname}}</h2>
              </div>
  
              <div class="media text-body font-size-1 mb-3">
                <i class="fas fa-briefcase mt-1 mr-2"></i>
                <div class="media-body">
                  Tác giả tại Tin tức tổng hợp.
                </div>
              </div>
  
            <p>{{$user->bio}}</p>
  
              <!-- Read More - Collapse -->
              <div class="collapse" id="collapseDescriptionSection">
                <p>Over the course of her career she has developed a skill set in analyzing data and she hopes to use her experience in teaching and data science to help other people learn the power of programming the ability to analyze data, as well as present the data in clear and beautiful visualizations.</p>
              </div>
              <!-- End Read More - Collapse -->
  
              <!-- Link -->
              <a class="link link-collapse small font-size-1 font-weight-bold" data-toggle="collapse" href="#collapseDescriptionSection" role="button" aria-expanded="false" aria-controls="collapseDescriptionSection">
                <span class="link-collapse-default">Đọc thêm</span>
                <span class="link-collapse-active">Thu gọn lại</span>
                <span class="link-icon ml-1">+</span>
              </a>
              <!-- End Link -->
   
                <div class="border-top pt-5 mt-5">
                  <h3 class="mb-4">Bình luận gần đây</h3>
                  <div class="row">
                  <div class="activity-feed">
                    @foreach($comments as $comment)
                    <div class="feed-item">
                    <div class="date">{{$comment->created_at}}</div>
                      <div class="text">"<em>{{$comment->content}}</em>" tại <a href="{{url('post',$comment->Posts->slug)}}">{{$comment->Posts->name}}</a></div>
                    </div>
                    @if($loop->index == 4)
                        @break
                    @endif
                    @endforeach
                    @if($user->hasComments->count() == 0)
                    {{"Chưa có bình luận nào"}}
                    @endif
                </div>
              </div>
            </div>
  
              <!-- Courses -->
              @foreach($user->roles as $roles)
              @if($roles->pivot->role_id == 1 || $roles->pivot->role_id == 2 || $roles->pivot->role_id == 3)
              <div class="border-top pt-5 mt-3">
              <h3 class="mb-4">Bài viết của Tác giả: {{$user->fullname}}</h3>
  
                    @if($user->hasPosts)
                    <div class="allPostAuthor">
                    @foreach($posts as $post)
                    <div class="row mb-2 pb-2 border-bottom listPostAuthor" data-postid="{{$post->id}}">
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0">
                                <div class="position-relative">
                                    <a href="course-description.html">
                                    <img class="img-fluid w-100" src="{{asset('uploads/posts/thumbnail')}}/{{$post->thumbnail}}" alt="{{$post->name}}" style="border-radius: 0rem;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <div class="media mb-2">
                                    <div class="media-body">
                                        <a href="{{url('post', $post->slug)}}"><h3 class="h4 text-hover-primary mb-0" >{{$post->name}}</h3></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start align-items-center small text-muted">
                                    <div class="d-inline-block mr-2">
                                        {{$post->created_at}}
                                    </div>
                                    <div class="d-inline-block mr-2">
                                        @foreach($post->Categories as $categories)
                                    <a style="color: #333;" href="{{url('category', $categories->slug)}}">{{$categories->name}}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">
                                {{$post->desc}}</p>
                            </div>
                        </div>
                        @endforeach
                      </div>
                        @endif
                        <input type="hidden" name="ajaxLoadPostAuthor" value="{{route('load.postauthor')}}"/>
                        @if($user->hasPosts->count() == 0)
                        <div class="row" style="margin-bottom: 20rem;">
                        <p class="pl-3">(Tác giả này hiện chưa có bài viết nào!)</p>
                          <script>$('#readMorePost').hide();</script>
                        </div>
                        @else
                        <div id="readMorePost" class="text-right font-size-1 mt-6">
                          <a class="font-weight-bold loadPostAuthorActivity" data-userid="{{$user->id}}" href="javascript:;">Xem thêm <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                        </div>
                      </div>
                        @endif
                        @endif
               
       
      
             @endforeach
            
              <!-- End Courses -->
                        @if($user->hasPosts->count() == 0)
                          <script>$('#readMorePost').hide();</script>
                        @endif

  
              <!-- Sticky Block End Point -->
              <div id="stickyBlockEndPoint"></div>
            </div>
          </div>
        </div>
      </div>
      <script src="{{asset('frontend/assets/js/load-post-author.js')}}"></script>
      <!-- End Profile Section -->
@endsection
