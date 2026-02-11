<div class="row align-center">
    <div class="col-8">
        <form method="POST" class="muoc-form" autocomplete="off">
            @php
                muoc_nonce_field('register');
            @endphp
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal">Name:</label>
                <input type="text" name="name"/>
            </div>
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal">Username:</label>
                <input type="text" name="username"/>
            </div>
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal">Email:</label>
                <input type="email" name="email" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal">Password:</label>
                <input type="password" name="password" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="text-warning fs-6 fw-normal">Password confirm:</label>
                <input type="password" name="password_confirm" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="text-light text-opacity-50 fs-6 fw-normal">
                    <input type="checkbox" name="password_confirm" class="form-control" style="width: 20px;height: 20px;margin: 0;padding: 0;vertical-align: sub; margin-right: 5px;"/> I agree to the terms and rules.
                </label>
            </div>
            <button type="submit" class="button primary is-large mt-2">Register</button>
        </form>
    </div>
</div>