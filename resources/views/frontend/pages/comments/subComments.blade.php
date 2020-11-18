<ul class="list-unstyled">
    <!-- subComment -->
    <li class="mb-5">
        <div class="border-left border-3 pl-4">
            <div class="media align-items-center mb-2">
                <div class="avatar avatar-circle mr-3">
                    <img class="avatar-img" src="{{ asset('img/' . $subComment->Author->thumbnail) }}"
                        alt="Image Description">
                </div>
                <div class="media-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 mb-0">{{ $subComment->Author->fullname }}</span>
                        <small
                            class="text-muted">{{ date('m-d-Y', strtotime(Str::substr($subComment->date, 0, 10))) }}</small>
                    </div>
                </div>
            </div>

            <p>{{ $subComment->content }}</p>

            <button class="font-weight-bold btn reply-button">Trả lời</button>
        </div>
    </li>
    <!-- End subComment -->
</ul>
