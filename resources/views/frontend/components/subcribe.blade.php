<form action="{{ route('subcribe.store')}}" method="POST" class="js-validate mb-2">
    @csrf
    <label class="sr-only" for="subscribeSr">Đăng ký</label>
    <div class="input-group input-group-flush mb-3">
        <input type="hidden" name="author_id" value="NULL">
        <input type="email" class="form-control form-control-sm" name="email" id="subscribeSr" placeholder="Nhập email" aria-label="Your email" required
               data-msg="Please enter a valid email address.">
    </div>
    <button type="submit" class="btn btn-sm btn-primary btn-block">Đăng ký</button>
</form>