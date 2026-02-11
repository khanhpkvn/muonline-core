<style>
	.toplist-beauty .top-list-item {
		border-bottom: 1px solid transparent;
		transition: all 0.2s;
	}
	.toplist-beauty .top-list-item:hover {
		background-color: #342b29;
		border-bottom: 1px solid #5c432b;
		box-shadow: 0px 8px 10px -3px rgba(0, 0, 0, 0.45);
		color: #ffaf43;
		position: relative;
		scale: 1.05;
	}
</style>

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

<div class="toplist-beauty">
    @foreach($characters as $key => $character)
        <div class="row row-collapse align-middle align-center mb-2 top-list-item">
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
                    <a href="">{{ $character->Name }}</a>
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