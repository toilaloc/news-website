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
@endif
</div>
<div id="loadCmt">
</div>
