@if(muoc_auth()->user())
    <div class="header-button me-3">
        <a href="/account" class="button primary is-shade is-xlarge">
            <span>MY ACCOUNT</span>
        </a>
    </div>
    <div class="header-button">
        <a href="/logout" class="button primary is-bevel is-xlarge">
            <span>LOG OUT</span>
        </a>
    </div>
@else
    <div class="header-button me-3">
        <a href="/register" class="button primary is-shade is-xlarge">
            <span>REGISTER</span>
        </a>
    </div>
    <div class="header-button">
        <a href="/login" class="button primary is-bevel is-xlarge">
            <span>LOG IN</span>
        </a>
    </div>
@endif