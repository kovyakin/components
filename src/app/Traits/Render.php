<?php
/*
 * MIT License
 * Copyright (c) 2024 Kovyakin Dmitry kdv-1974@mail.ru
*/

declare(strict_types=1);

namespace Kovyakin\Components\app\Traits;

use Illuminate\Contracts\View\View;

trait Render
{
    protected static function view(): View
    {
        return view('components::table')->with([

            'className' => self::getClassName(),
            'use_api' => !empty(self::$useApi) ?? self::$useApi,
            'api_query' => !empty(self::$apiQuery) ? json_encode(
                self::$apiQuery,
                JSON_UNESCAPED_UNICODE
            ) : '',
            'columns' => json_encode(self::$columns, JSON_UNESCAPED_UNICODE),
            'column_operation' => !empty(self::$column_operation) ?? self::$column_operation,
            'items' => !empty(self::$items) ? self::$items : json_encode(
               [],
                JSON_UNESCAPED_UNICODE
            ),
            'expanded' => !empty(self::$expanded) ? self::$expanded : false,
            'show_index' => !empty(self::$show_index) ? self::$show_index : false,
            'use_item_selected' => !empty(self::$useItemSelected) ? self::$useItemSelected : false,
            'alternating' => !empty(self::$alternating) ? self::$alternating : false,
            'border_cell' => !empty(self::$border_cell) ? self::$border_cell : false,
            'buttons_pagination' => !empty(self::$buttons_pagination) ? self::$buttons_pagination : false,
            'allow_group_delete' => !empty(self::$allowGroupDelete) ? self::$allowGroupDelete : false,
            'no_hover' => !empty(self::$no_hover) ? self::$no_hover : false,
//           css style
            'font_size_header' => !empty(self::$font_size_header) ? self::$font_size_header : '',
            'font_size_body' => !empty(self::$font_size_body) ? self::$font_size_body : '',
            'body_row_background_color' => !empty(self::$body_row_background_color) ? self::$body_row_background_color
                : '',
            'show_block_search' => !empty(self::$show_block_search) ? self::$show_block_search : false,
            'use_rating' => !empty(self::$useRating) ? self::$useRating : false,
            'block_operation' => !empty(self::$block_operation) ? json_encode(
                self::$block_operation,
                JSON_UNESCAPED_UNICODE
            ) : '',
            'props_rating' => !empty(self::$propsRating) ? json_encode(
                self::$propsRating,
                JSON_UNESCAPED_UNICODE
            ) : '',
            'block_search' => !empty(self::$block_search) ? json_encode(
                self::$block_search,
                JSON_UNESCAPED_UNICODE
            ) : '',
            'style_table' => !empty(self::$style_table) ? json_encode(
                self::$style_table,
                JSON_UNESCAPED_UNICODE
            ) : '',
            'direction' => !empty(self::$direction) ? json_encode(
                self::$direction,
                JSON_UNESCAPED_UNICODE
            ) : '',
            'props' => !empty(self::$props) ? json_encode(
                self::$props,
                JSON_UNESCAPED_UNICODE
            ) : '',
        ]);
    }

}