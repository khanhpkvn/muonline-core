<div class="row align-center">
    <div class="col-8">
        @if(isset($success) && $success)
        <div class="border border-success bg-success bg-opacity-25 p-3 mb" role="alert">
            Tài khoản của bạn đã được đăng ký, bạn đã có thể đăng nhập và bắt đầu chinh phục các lục địa MU ngay bây giờ!
        </div>
        @endif
        @if(isset($errors) && $errors->any())
            <div class="mb">
            @foreach ($errors->all() as $error)
                <div class="border border-danger bg-danger bg-opacity-25 p-3 mb-2" role="alert">
                    {{ $error }}
                </div>
            @endforeach
            </div>
        @endif
        <h2 class="text-center fs-1">Chào mừng chiến binh!</h2>
        <p class="text-center mb-0">Hãy ghi danh để bắt đầu chinh phục và bảo vệ các lục địa MU ngay bây giờ.</p>
        <p class="text-center">Tham gia những trận quyết chiến để giành quyền kiểm soát và mở rộng lãnh thổ của mình!</p>
        <form method="POST" class="muoc-form mb-0" autocomplete="off">
            @php
                muoc_nonce_field('register');
            @endphp
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal" for="full_name">Name:</label>
                <input name="full_name" id="full_name" type="text" value="{{ old('full_name') }}"/>
            </div>
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal" for="username">Username:</label>
                <input name="username" id="username" type="text" value="{{ old('username') }}" autocomplete="off"/>
            </div>
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal" for="email">Email:</label>
                <input name="email" id="email" type="email" class="form-control" value="{{ old('email') }}"/>
            </div>
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal" for="password">Password:</label>
                <input name="password" id="password" type="password" class="form-control" value=""/>
            </div>
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal" for="password_confirmation">Password confirmation:</label>
                <input name="password_confirmation" id="password_confirmation" type="password" class="form-control" value=""/>
            </div>
            <div class="form-group">
                <label class="text-light text-opacity-50 fs-6 fw-normal" for="agree">
                    <input type="checkbox" name="agree" id="agree" class="form-control" style="width: 20px;height: 20px;padding: 0;vertical-align: sub; margin: 0 5px 0 0;"/> I agree to the <a href="">terms and rules</a>.
                </label>
            </div>
            <button type="submit" class="button primary is-large mt-2">Register</button>
        </form>
    </div>
</div>