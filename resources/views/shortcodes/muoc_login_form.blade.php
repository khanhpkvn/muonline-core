<div class="row align-center">
    <div class="col-8">
        @if(isset($success))
            <div class="border border-success bg-success bg-opacity-25 p-3 mb" role="alert">
                Đăng {{ $success == 'login' ? 'nhập' : 'xuất' }} thành công! Đang chuyển hướng...
                <script> setTimeout(() => {window.location.href = '';}, 1000); </script>
            </div>
        @endif

        @if(isset($errors) && $errors->any())
            <div class="mb" id="errors">
                @foreach ($errors->all() as $error)
                    <div class="border border-danger bg-danger bg-opacity-25 p-3 mb-2">
                        {{ $error }}
                    </div>
                @endforeach
            </div>
            <script>
	            window.addEventListener("load", function () {
		            document.getElementById('errors').scrollIntoView({
			            behavior: "smooth",
			            block   : "start"
		            });
	            });
            </script>
        @endif

        @if(isset($current_muserver_user) && $current_muserver_user && !isset($success))
            <div class="border border-success bg-success bg-opacity-25 p-3 mb-2">
                Bạn đã đăng nhập với tài khoản: "{{ $current_muserver_user->memb___id }}".
            </div>

            <a href="/account" class="button primary is-shade is-large mt-2">Account</a>
            <a href="/logout" class="button primary is-bevel is-large mt-2">Log out</a>
        @elseif(!isset($success))
            <form method="POST" class="muoc-form mb-0" autocomplete="off">
                @php
                    muoc_nonce_field('login');
                @endphp
                <input type="hidden" name="action" value="login"/>
                <div class="form-group">
                    <label class="text-warning fs-6 fw-normal">Username:</label>
                    <input name="username" type="text" value="{{ old('username') }}"/>
                </div>
                <div class="form-group">
                    <label class="text-warning fs-6 fw-normal">Password:</label>
                    <input name="password" type="password" class="form-control" value="{{ old('password') }}"/>
                </div>
                <div class="form-group">
                    <label class="text-light text-opacity-50 fs-6 fw-normal">
                        <input type="checkbox" name="remember" class="form-control" style="width: 20px;height: 20px;padding: 0;vertical-align: sub; margin: 0 5px 0 0;"/> Remember me.
                    </label>
                </div>
                <button type="submit" class="button primary is-shade is-large mt-2">Log in</button>
            </form>
        @endif
    </div>
</div>