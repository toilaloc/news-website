@if (Auth::user())
    <form class="js-validate pb-md-9">
        @csrf
        <div class="form-row">
            <div class="col-12 mb-sm-3">
                <div class="js-form-message form-group">
                    <input type="text" name="post_id" value="{{ $post_id }}">
                    <input type="text" name="user_id" value="{{ Auth::user()->id }}">
                    <textarea class="form-control" name="content" rows="7" id="descriptionTextarea"
                        placeholder="Bạn nghĩ gì về tin này?" required></textarea>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" id="create" class="btn btn-primary btn-wide transition-3d-hover">Gửi bình
                luận</button>
        </div>
    </form>
@else
    <div class="card" style="width: 100%">
        <div class="card-body">
            <p class="card-text">Bạn phải đăng nhập mới có thể bình luận được</p>
        </div>
    </div>
@endif
{{--
<script>
    $('#create').on('click', function() {

    })

</script> --}}
