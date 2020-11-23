@if (Auth::user())
    <div id="commentForm">
        <input type="hidden" name="loadFormReply" value="{{ route('load.formReply') }}" />
        <form method="POST" action="{{ route('comments.store') }}" class="js-validate pb-md-9">
            @csrf
            <div class="form-row">
                <div class="col-12 mb-sm-3">
                    <div class="js-form-message form-group">
                        <input type="hidden" name="post_id" value="{{ $post_id }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="js-form-message form-group">
                            <label class="input-label">Họ và tên:</label>
                            <input type="text" class="form-control" id="authorComment"
                                value="{{ Auth::user()->fullname }}">
                        </div>
                        @if (App\Models\Post_votes::where(['post_id' => $post_id, 'user_id' => Auth::user()->id])->exists())
                            <div class="mb-4">
                                <label class="input-label">Đánh giá bài viết:</label>
                                <span>Bạn đã đánh giá bài viết này rồi!</span>
                            </div>
                        @else
                            <div class="stars">
                                <label class="input-label">Đánh giá bài viết:</label>
                                <input class="star star-5" id="star-5" type="radio" value="5" name="star" />
                                <label class="star star-5" for="star-5"></label>
                                <input class="star star-4" id="star-4" type="radio" value="4" name="star" />
                                <label class="star star-4" for="star-4"></label>
                                <input class="star star-3" id="star-3" type="radio" value="3" name="star" />
                                <label class="star star-3" for="star-3"></label>
                                <input class="star star-2" id="star-2" type="radio" value="2" name="star" />
                                <label class="star star-2" for="star-2"></label>
                                <input class="star star-1" id="star-1" type="radio" value="1" name="star" />
                                <label class="star star-1" for="star-1"></label>
                            </div>

                        @endif

                        <div class="js-form-message form-group">
                            <label class="input-label">Ngày bình luận:</label>
                            <input type="date" class="form-control" value="{{ $dateTime->toDateString() }}" readonly>
                        </div>
                        <div class="js-form-message form-group">
                            <label class="input-label">Nội dung: <em>(Vui lòng sử dụng tiếng Việt có dấu để tôn trọng
                                    người đọc)</em></label>
                            <textarea class="form-control" name="content" rows="7" id="descriptionTextarea"
                                placeholder="Bạn nghĩ gì về tin này?"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-wide transition-3d-hover">Gửi bình luận</button>
            </div>
        </form>
    @else
        <div class="card" style="width: 100%">
            <div class="card-body">
                <p class="card-text">Bạn phải đăng nhập mới có thể bình luận được</p>
            </div>
        </div>
@endif
</div>
<div id="loadCmt">
</div>
{{--
<script>
    $('#create').on('click', function() {

    })

</script> --}}
