<div class="row align-center">
    <div class="col-8">
        
        @php
            echo '<pre style="background:white;z-index:9999;position:relative;color:#333;">'; var_dump($errors ?? []); echo '</pre>';
        @endphp
        
        <form method="POST" class="muoc-form mb-0" autocomplete="off">
            @php
                muoc_nonce_field('login');
            @endphp
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
            <button type="submit" class="button primary is-large mt-2">Login</button>
        </form>
    </div>
</div>