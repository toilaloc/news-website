<ul class="list-unstyled">
    @foreach ($comments as $item)
        <!-- Comment -->
        <li class="mb-5">
            <div class="media align-items-center mb-2">
                <div class="avatar avatar-circle mr-3">
                    <img class="avatar-img" style="width: 100%;height: 100%;" src="{{ asset('uploads/users/'.$item->Author->thumbnail) }}"
                        alt="Image Description">
                </div>
                <div class="media-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 mb-0" id="author_comment">{{ $item->Author->fullname }}</span>
                        <small
                            class="text-muted">{{$item->created_at->diffForHumans($dateTime)}}</small>
                    </div>
                </div>
            </div>

            <p style="margin-bottom: 0rem" id="commentContent">{{ $item->content }} 
            @if(Auth::check())
              <span class="ml-3 d-flex flex-row-reverse">
              <a class="text-muted report-comment" data-id="{{$item->id}}" href="javascript:;" data-toggle="modal" data-target="#exampleModalReportComment" href="javascript:;" data-toggle="tooltip"
                data-placement="top" title="Report story"><i class="far fa-flag text-body mr-1"></i></a>
              </span>
              <div id="exampleModalReportComment" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalTopCoverTitle" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
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
                            <label for="">Lý do báo cáo:</label>
                            <input type="hidden" class="comment-id" name="comment_id" value="" />
                            <input type="hidden" name="type" value="comment" />
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
              @endif
            </p>

        <button class="font-weight-bold btn reply-button" style="padding: 0rem 0rem" id="replyComment" data-idCmt="{{$item->id}}" data-authorReply="{{$item->Author->fullname}}">Trả lời</button>

            <ul class="list-unstyled mt-3">
                <!-- subComment -->
                @foreach ($item->subComments as $subComment)
                    @include('frontend.pages.comments.subComments',['subComment'=>$subComment])
                @endforeach
                <!-- End subComment -->
            </ul>
        </li>
        <!-- End Comment -->
    @endforeach

</ul>
<div class="show-more"><button class="btn btn-primary show-comment-more">Show More</button></div>
