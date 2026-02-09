@extends('admin-pages.layout')

@section('title')
    {{ muoc_trans('Table', true) }}
@endsection

@section('after-title')
    <a href="?page={{$menuSlug}}&tab=table&action=create" class="page-title-action">{{ muoc_trans('Add new', true) }}</a>
@endsection

@section('content')

    @if ($current_request->get('action') == 'create')
        <form method="POST">
            <input name="action" value="create_setting" type="hidden"/>
            <div id="poststuff" class="row gx-3">
                <div class="col">
                    <div class="meta-box-sortables ui-sortable">
                        <div class="postbox">

                            <div class="postbox-header">
                                <h2 class="hndle ui-sortable-handle">{{ muoc_trans('Add new setting', true) }}</h2>
                                <div class="handle-actions">
                                    <button type="button" class="handlediv" aria-expanded="true">
                                        <span class="toggle-indicator"></span>
                                    </button>
                                </div>
                            </div>

                            <div class="inside form-table w-auto">

                                <div class="input-group mt-2 mb-3">
                                    <label for="key">
                                        {{ muoc_trans('Key', true) }}:
                                        <input type="text" id="key" name="key" class="w-100 mt-1" value="{{ $_POST['key'] ?? '' }}"/>
                                    </label>
                                </div>

                                <div class="input-group mt-2">
                                    <label for="value">
                                        {{ muoc_trans('Value', true) }}:
                                        <input type="text" id="value" name="value" class="w-100 mt-1" value="{{ $_POST['value'] ?? '' }}"/>
                                    </label>
                                </div>

                            </div>

                        </div>
                        <button type="submit" class="button button-primary">{{ muoc_trans('Add new', true) }}</button>
                    </div>
                </div>
            </div>
        </form>
    @else
        <form method="GET">
            <input type="hidden" name="page" value="{{ $_REQUEST['page'] ?? '' }}"/>
            <input type="hidden" name="tab" value="{{ $_REQUEST['tab'] ?? '' }}"/>
            @php
                $table->prepare_items();
                $table->views();
                $table->search_box('Search', 'search_id');
                $table->display();
            @endphp
        </form>
    @endif
@endsection