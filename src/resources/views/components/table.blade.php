<div id="{{$className}}"
     target="table_{{$className}}">

    <table-component
            scrf="{{ csrf_token() }}"
            @if($token) token="{{$token}}"
            @endif
            @if($use_api) use_api
            @endif
            @if($api_query)
                query_api="{{$api_query}}"
            @endif
            columns="{{$columns}}"
            @if($column_operation)
                column_operation
            @endif
            items="{{$items}}"
            @if($show_index) show_index
            @endif
            @if($expanded) expanded
            @endif
            @if($use_item_selected) item_selected
            @endif
            @if($use_rating) use_rating
            @endif
            @if($alternating) alternating
            @endif
            @if($border_cell) border_cell
            @endif
            @if($buttons_pagination) buttons_pagination
            @endif
            @if($allow_group_delete) allow_group_delete
            @endif
            @if($no_hover) no_hover
            @endif
            props_rating="{{$props_rating}}"
            font_size_header="{{$font_size_header}}"
            font_size_body="{{$font_size_body}}"
            body_row_background_color="{{$body_row_background_color}}"
            @if($show_block_search) show_block_search
            @endif
            @if($button_add) button_add
            @endif
            style_button_add="{{$style_button_add}}"
            block_search="{{$block_search}}"
            block_operation="{{$block_operation}}"
            style_table="{{$style_table}}"
            direction="{{$direction}}"
            props="{{$props}}"
            @if($use_toast) toast
            @endif
            modal_dialog="{{$modal_dialog}}"
            {{--            author--}}
    >
    </table-component>

</div>

@once
    @push('table')
        <script src="{{asset('/vendor/kovyakin/components/table/app-BaI1wmQB.min.js')}}"
                type="module"></script>
        <link href="{{asset('/vendor/kovyakin/components/table/app-aYNoVCWh.css')}}"
              rel="stylesheet"/>
        <link href="{{asset('/vendor/kovyakin/components/table/app-D3B3HHh9.min.css')}}"
              rel="stylesheet"/>
    @endpush
@endonce
