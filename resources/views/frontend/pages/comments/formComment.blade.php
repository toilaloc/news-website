<form class="js-validate pb-md-9">
    <div class="form-row">
        <div class="col-sm-12 mb-sm-3">
            <div class="js-form-message form-group">
                <label class="input-label">Họ và tên</label>
                <input type="text" class="form-control" name="name" id="inputName" placeholder="Name" aria-label="Name" required data-msg="Please enter your name.">
            </div>
        </div>



        <div class="col-12 mb-sm-3">
            <div class="js-form-message form-group">
                <label class="input-label">Bình luận</label>
                <textarea class="form-control" rows="7" id="descriptionTextarea" placeholder="Bạn nghĩ gì về tin này?" required data-msg="Please enter your message."></textarea>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary btn-wide transition-3d-hover">Gửi bình luận</button>
    </div>
</form>