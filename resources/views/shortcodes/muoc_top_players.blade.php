<div class="row row-collapse">

    <div class="col medium-1 small-1 large-1">
        <div class="col-inner">
            <p>#</p>
        </div>
    </div>

    <div class="col medium-7 small-7 large-7 text-left">
        <div class="col-inner">
            <p>Name</p>
        </div>
    </div>

    <div class="col medium-4 small-4 large-4 text-right">
        <div class="col-inner">
            <p>Level</p>
        </div>
    </div>

</div>

@foreach($characters as $key => $character)
    <div class="row row-collapse">
        <div class="col medium-1 small-1 large-1">
            <div class="col-inner">
                <p>{{ (int)$key + 1 }}</p>
            </div>
        </div>
        <div class="col medium-7 small-7 large-7 text-left">
            <div class="col-inner">
                <p>{{ $character->Name }}</p>
            </div>
        </div>
        <div class="col medium-4 small-4 large-4 text-right">
            <div class="col-inner">
                <p>{{ $character->level }}</p>
            </div>
        </div>
    </div>
@endforeach
