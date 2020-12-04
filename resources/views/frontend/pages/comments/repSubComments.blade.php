
<li class="mb-2 mt-2">
    <div class="border-left border-3 pl-4">
        <div class="media align-items-center mb-2">
            <div class="avatar avatar-circle mr-3">
                <img class="avatar-img" style="width: 100%;height: 100%;" src="{{ asset('uploads/users/' . $subReply->Author->thumbnail) }}"
                    alt="Image Description">
            </div>
            <div class="media-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="h5 mb-0">{{ $subReply->Author->fullname }}</span>
                    <small
                        class="text-muted">{{$subReply->created_at->diffForHumans($dateTime)}}</small>
                </div>
            </div>
            
        </div>

        <p style="margin-bottom: 0rem">{{ $subReply->content }}
            @if(Auth::check())
            <span class="ml-3 d-flex flex-row-reverse">
                <a class="text-muted report-comment"  data-id="{{$subReply->id}}" href="javascript:;" data-toggle="modal" data-target="#exampleModalReportComment" href="javascript:;" data-toggle="tooltip"
                    data-placement="top" title="Report story"><i class="far fa-flag text-body mr-1"></i></a>
                </span>
                @endif
        </p>

        <div class="card bg-light shadow-none p-3 mt-4">
            <div class="media">
              <div class="media-body">
                <p>Đang trả lời "{{$subReply->reply($subReply->comment_id)->content}}"</p>
              </div>
            </div>
          </div>

    <button class="font-weight-bold btn reply-button" style="padding: 0rem 0rem" id="replyComment" data-idCmt="{{$subReply->id}}" data-authorReply="{{$subReply->Author->fullname}}">Trả lời</button>
    </div>

    @if($subReply->subComments)
    <ul class="list-unstyled">
        @foreach($subReply->subComments as $subReply) 
            @include('frontend.pages.comments.repSubComments', ['subReply' => $subReply])
        @endforeach 
    </ul>
    @endif

</li>