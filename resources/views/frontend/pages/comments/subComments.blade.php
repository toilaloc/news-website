<ul class="list-unstyled">
    <!-- subComment -->
    <li class="mb-2 ml-3 mt-2">
        <div class="border-left border-3 pl-4">
            <div class="media align-items-center mb-2">
                <div class="avatar avatar-circle mr-3">
                    <img class="avatar-img" style="width: 100%;height: 100%;" src="{{ asset('uploads/users/' . $subComment->Author->thumbnail) }}"
                        alt="Image Description">
                </div>
                <div class="media-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 mb-0">{{ $subComment->Author->fullname }}</span>
                        <small
                            class="text-muted">{{$item->created_at->diffForHumans($dateTime)}}</small>
                    </div>
                </div>
            </div>

            <p style="margin-bottom: 0rem">{{ $subComment->content }}
                @if(Auth::check())
                <span class="ml-3 d-flex flex-row-reverse">
                    <a class="text-muted report-comment" data-id="{{$subComment->id}}" href="javascript:;" data-toggle="modal" data-target="#exampleModalReportComment" href="javascript:;" data-toggle="tooltip"
                        data-placement="top" title="Report story"><i class="far fa-flag text-body mr-1"></i></a>
                </span> 
                @endif
            </p>

        <button class="font-weight-bold btn reply-button" style="padding: 0rem 0rem" id="replyComment" data-idCmt="{{$subComment->id}}" data-authorReply="{{$subComment->Author->fullname}}">Trả lời</button>
        </div>    
    @if($subComment->subComments)
        <ul class="list-unstyled">
            @foreach($subComment->subComments as $subReply)
                @include('frontend.pages.comments.repSubComments', ['subReply' => $subReply])
             @endforeach
        </ul>
    @endif
    </li>

</ul>
