<ul class="list-unstyled">
    <!-- subComment -->
    <li class="mb-2 ml-3">
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
                            class="text-muted">{{$dateTime->diffForHumans($item->date)}}</small>
                    </div>
                </div>
            </div>

            <p style="margin-bottom: 0rem">{{ $subComment->content }}</p>

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
