<div class="toplist row large-columns-1 medium-columns-1 small-columns-1 row-small mt-4">
    @foreach($posts as $post)
        <div class="post-item toplist-item col py-2">
            <div class="col-inner">
                <div class="d-flex align-middle">
                    <a href="{{ get_permalink($post) }}" class="plain is-large full-width no-margin">
                        <span class="text-warning"></span>
                        {{ $post->post_title }}
                    </a>
                    <div class="post-meta op-8">
                        {{ muoc_date_format($post->post_date) }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>