<div class="row row-small">

    <div class="col medium-4 small-12 large-2">
        <div class="col-inner">
            <p>#</p>
        </div>
    </div>

    <div class="col medium-4 small-12 large-6 text-left">
        <div class="col-inner">
            <p>Name</p>
        </div>
    </div>

    <div class="col medium-4 small-12 large-4 text-right">
        <div class="col-inner">
            <p>Level</p>
        </div>
    </div>

</div>

@foreach($characters as $key => $character)
    <div class="row row-small">
        <div class="col medium-4 small-12 large-2">
            <div class="col-inner">
                <p>{{ (int)$key + 1 }}</p>
            </div>
        </div>
        <div class="col medium-4 small-12 large-6 text-left">
            <div class="col-inner">
                <p>{{ $character->Name }}</p>
            </div>
        </div>
        <div class="col medium-4 small-12 large-4 text-right">
            <div class="col-inner">
                <p>{{ $character->level }}</p>
            </div>
        </div>
    </div>
@endforeach
