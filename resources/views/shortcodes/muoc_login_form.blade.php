<div class="row align-center">
    <div class="col-8">
        @if(isset($success) && $success)
            <div class="border border-success bg-success bg-opacity-25 p-3 mb" role="alert">
                Đăng nhập thành công!
            </div>
        @endif

        @if(isset($errors) && $errors->any())
            <div class="mb">
                @foreach ($errors->all() as $error)
                    <div class="border border-danger bg-danger bg-opacity-25 p-3 mb-2">
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif

        @if(isset($current_muserver_user) && $current_muserver_user)
            <div class="border border-success bg-success bg-opacity-25 p-3 mb-2">
                Bạn đã đăng nhập với tài khoản: "{{ $current_muserver_user->memb___id }}".
            </div>

            <form method="POST" class="muoc-form mb-0">
                @php
                    muoc_nonce_field('logout');
                @endphp
                <input type="hidden" name="action" value="logout"/>
                <button type="submit" class="button">Logout</button>
            </form>
        @else
            <form method="POST" class="muoc-form mb-0" autocomplete="off">
                @php
                    muoc_nonce_field('login');
                @endphp
                <input type="hidden" name="action" value="login"/>
                <div class="form-group">
                    <label class="text-warning fs-6 fw-normal">Username:</label>
                    <input name="username" type="text" value="{{ old('username', 'khanhpkvn') }}"/>
                </div>
                <div class="form-group">
                    <label class="text-warning fs-6 fw-normal">Password:</label>
                    <input name="password" type="password" class="form-control" value="{{ old('password', '123456') }}"/>
                </div>
                <div class="form-group">
                    <label class="text-light text-opacity-50 fs-6 fw-normal">
                        <input type="checkbox" name="remember" class="form-control" style="width: 20px;height: 20px;padding: 0;vertical-align: sub; margin: 0 5px 0 0;"/> Remember me.
                    </label>
                </div>
                <button type="submit" class="button primary is-large mt-2">Login</button>
            </form>
        @endif
    </div>
</div>