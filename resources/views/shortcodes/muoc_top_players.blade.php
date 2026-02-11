<div class="row row-collapse align-middle align-center mb-2">

    <div class="col medium-1 small-1 large-1 text-left">
        <div class="col-inner">
            #
        </div>
    </div>

    <div class="col medium-1 small-1 large-1">
        <div class="col-inner"></div>
    </div>

    <div class="col medium-5 small-5 large-5 text-left">
        <div class="col-inner">
            Name
        </div>
    </div>

    <div class="col medium-2 small-2 large-2 text-right">
        <div class="col-inner">
            Level
        </div>
    </div>

</div>

<div class="toplist">
    @foreach($characters as $key => $character)
        <div class="row row-collapse align-middle align-center mb-2 toplist-item">
            <div class="col medium-1 small-1 large-1 text-left">
                <div class="col-inner">
                    {{ (int)$key + 1 }}
                </div>
            </div>

            <div class="col medium-1 small-1 large-1">
                <div class="col-inner">

                </div>
            </div>

            <div class="col medium-5 small-5 large-5 text-left">
                <div class="col-inner">
                    <a href="#">{{ $character->Name }}</a>
                </div>
            </div>

            <div class="col medium-2 small-2 large-2 text-right">
                <div class="col-inner">
                    {{ $character->level }}
                </div>
            </div>
        </div>
    @endforeach
</div>