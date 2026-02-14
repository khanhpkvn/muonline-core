<div class="row align-center">
    <div class="col-8">
        <div class="border border-success bg-success bg-opacity-25 p-3 mb" role="alert">
            Tài khoản của bạn đã được đăng ký, vui lòng kiểm tra email để kích hoạt tài khoản!
        </div>
        <h2 class="text-center fs-1">Chào mừng chiến binh!</h2>
        <p class="text-center mb-0">Hãy ghi danh để bắt đầu chinh phục và bảo vệ các lục địa MU ngay bây giờ.</p>
        <p class="text-center">Tham gia những trận quyết chiến để giành quyền kiểm soát và mở rộng lãnh thổ của mình!</p>
        <form method="POST" class="muoc-form mb-0" autocomplete="off">
            @php
                muoc_nonce_field('register');
            @endphp
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal">Name:</label>
                <input name="memb_name" type="text" value="{{ old('memb_name', 'test' . rand(10, 999999)) }}"/>
            </div>
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal">Username:</label>
                <input name="memb___id" type="text" value="{{ old('memb___id', 'test' . rand(10, 999999)) }}"/>
            </div>
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal">Email:</label>
                <input name="mail_addr" type="email" class="form-control" value="{{ old('mail_addr', 'test' . time() . '@gmail.com') }}"/>
            </div>
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal">Password:</label>
                <input name="memb__pwd" type="password" class="form-control" value="123456"/>
            </div>
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal">Password confirm:</label>
                <input name="confirm_memb__pwd" type="password" class="form-control" value="123456"/>
            </div>
            <div class="form-group">
                <label class="text-light text-opacity-50 fs-6 fw-normal">
                    <input type="checkbox" name="agree" class="form-control" style="width: 20px;height: 20px;padding: 0;vertical-align: sub; margin: 0 5px 0 0;"/> I agree to the <a href="">terms and rules</a>.
                </label>
            </div>
            <button type="submit" class="button primary is-large mt-2">Register</button>
        </form>
    </div>
</div>