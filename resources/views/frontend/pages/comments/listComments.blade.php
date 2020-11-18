<ul class="list-unstyled">
    @foreach ($comments as $item)
        <!-- Comment -->
        <li class="mb-5">
            <div class="media align-items-center mb-2">
                <div class="avatar avatar-circle mr-3">
                    <img class="avatar-img" src="{{ asset('img/' . $item->Author->thumbnail) }}"
                        alt="Image Description">
                </div>
                <div class="media-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 mb-0">{{ $item->Author->fullname }}</span>
                        <small
                            class="text-muted">{{ date('m-d-Y', strtotime(Str::substr($item->date, 0, 10))) }}</small>
                    </div>
                </div>
            </div>

            <p>{{ $item->content }}</p>

            <button class="font-weight-bold btn reply-button">Trả lời</button>

            <ul class="list-unstyled mt-5">
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
