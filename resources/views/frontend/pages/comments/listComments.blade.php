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
                            class="text-muted">{{$dateTime->diffForHumans($item->created_at)}}</small>
                    </div>
                </div>
            </div>

            <p style="margin-bottom: 0rem" id="commentContent">{{ $item->content }}</p>

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
