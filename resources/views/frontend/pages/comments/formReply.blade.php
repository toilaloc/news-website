@if (Auth::user())
<div id="replyForm">
<div class="col-sm-6 mb-3 mb-sm-0" style="padding-left: 0px;">
    <a class="font-size-1 font-weight-bold" href="javascript:backComment()" id="backToComment"><i class="fas fa-angle-left fa-sm mr-1"></i>Trở lại</a>
</div>
    <form method="POST" action="{{route('comments.store')}}" class="js-validate pb-md-9">
        @csrf
        <div class="form-row">
            <div class="col-12 mb-sm-3">
                <div class="js-form-message form-group">
                    <input type="hidden" name="post_id" value="postID">
                    <input type="hidden" name="user_id" value="userID">
                    <input type="hidden" name="comment_id" value="commentID">
                    {{-- <div class="js-form-message form-group">
                        <label class="input-label">Họ và tên:</label>
                    <input type="text" class="form-control" value="{{Auth::user()->fullname}}">
                    </div> --}}
                    {{-- <div class="js-form-message form-group">
                        <label class="input-label">Ngày bình luận:</label>
                    <input type="date" class="form-control" value="dateRoot" readonly>
                    </div> --}}
                    <div class="js-form-message form-group">
                        <label class="input-label">Nội dung: <em>(Vui lòng sử dụng tiếng Việt có dấu để tôn trọng người đọc)</em></label><br>
                    <textarea class="form-control" name="content" rows="2" id="descriptionTextarea"
                        placeholder="Đang trả lời bình luận của authorReplyName"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-wide transition-3d-hover">Gửi phản hồi</button>
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
{{--
<script>
    $('#create').on('click', function() {

    })

</script> --}}
