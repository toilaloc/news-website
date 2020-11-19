
<li class="mb-2 ml-2">
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
                        class="text-muted">{{$dateTime->diffForHumans($subReply->date)}}</small>
                </div>
            </div>
        </div>

        <p style="margin-bottom: 0rem">{{ $subReply->content }}</p>

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