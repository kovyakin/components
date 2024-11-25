<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">

<div style="text-align: center;">

![GitHub watchers](https://img.shields.io/github/watchers/kovyakin/components)
![Packagist Stars](https://img.shields.io/packagist/stars/kovyakin/components)

![Packagist Version](https://img.shields.io/packagist/v/kovyakin/components)
![Packagist License](https://img.shields.io/packagist/l/kovyakin/components)

</div>

# Component Table for Laravel

## Requirements

- Laravel 11+.
- PHP 8.2 +.

## Main

This package is developed on Vue3 
and is added to work with Laravel.

# Style and CSS

- Style table are installed in $style_table

Example

```php
   protected static array $style_table = [

 //        // EXAMPLE
         'easy_table_border' => '1px solid #445269',
         'easy_table_row_border' => '1px solid #445269',

         'easy_table_header_font_size' => '14px',
         'easy_table_header_height' => '50px',
         'easy_table_header_font_color' => '#c1cad4',
         'easy_table_header_background_color' => '#2d3a4f',

         'easy_table_header_item_padding' => '10px 15px',

         'easy_table_body_even_row_font_color' => '#fff',
         'easy_table_body_even_row_background_color' => ' #4c5d7a',

         'easy_table_body_row_font_color' => '#c0c7d2',
         'easy_table_body_row_background_color' => '#2d3a4f',
         'easy_table_body_row_height' => '50px',
         'easy_table_body_row_font_size' => '14px',

         'easy_table_body_row_hover_font_color' => '#2d3a4f',
         'easy_table_body_row_hover_background_color' => '#eee',

         'easy_table_body_item_padding' => '10px 15px',

         'easy_table_footer_background_color' => '#2d3a4f',
         'easy_table_footer_font_color' => '#c0c7d2',
         'easy_table_footer_font_size' => '14px',
         'easy_table_footer_padding' => '0px 10px',
         'easy_table_footer_height' => '50px',

         'easy_table_rows_per_page_selector_width' => '70px',
         'easy_table_rows_per_page_selector_option_padding' => '10px',
         'easy_table_rows_per_page_selector_z_index' => '1',


         'easy_table_scrollbar_track_color' => '#2d3a4f',
         'easy_table_scrollbar_color' => '#2d3a4f',
         'easy_table_scrollbar_thumb_color' => '#4c5d7a',
         'easy_table_scrollbar_corner_color' => '#2d3a4f',

         'easy_table_loading_mask_background_color' => '#2d3a4f',
     ];  
```

<img src="https://github.com/kovyakin/components/blob/master/docs/images/8.png" alt="image">

the table view, column fixing, etc. are configured in $props.

```php
 protected static array $props = [
         'table_min_height' => 18,
         //num; Min height of table (table header and table body, without footer)
         'table_height' => null,
         // number | null ;Height of table (table header and table body, without footer)
         'table_class_name' => 'customize-table',
         // preset customized table styles
         'show_index_symbol' => '#',
         //Text of index column header when $show_index is true
         'rows_per_page_message' => 'rows per page:',
         //Rows per page message
         'rows_items' => [25, 50, 100],
         //A number array of rows-per-page, working as the options of rows per page
         // selector
         'rows_per_page' => 25,
         //num; Rows of items to display in per page
         'rows_of_page_separator_message' => 'of',
         //Rows of page separator message. e.g. 1-5 of 5
         'must_sort' => false,
         //If true then one can not disable sorting, it will always switch between ascending and
         // descending
         'index_column_width' => 40,
         //num; Width of index column.
         'hide_rows_per_page' => false,
         //boolean; Set to true to hide rows per page
         'hide_footer' => false,
         //boolean; Set true to hide native footer of vue3-easy-data-table.
         'filter_options' => null,
         //FilterOption[]; In the future
         'fixed_index' => false,
         //boolean; Fixed index column to the left side of table.
         'fixed_header' => false,
         //boolean; Fixed header to top of table. NOTE: Does not work in IE11
         'fixed_expand' => false,
         //boolean; Fixed expand column to the left side of table.In the future
         'fixed_checkbox' => false,
         //boolean; Fixed checkbox column to the left side of table.
         'expand_column_width' => 36,
         //number; Width of expand column. In the future
         'empty_message' => 'No Available Data',
         //string; Message to display when there is no data in table
         'current_page' => 1,
         //number; Initial current page. With use Api
         'checkbox_column_width' => null,
         //number; Width of checkbox column
         'theme_color' => '#67C23AFF',
         // Use theme-color prop to customize color of active checkbox, active option of rows selector, loading animation and active pagination button.
     ];
```

font size header, fon size rows and color rows can be installed in
$font_size_header,
$font_size_body,
$body_row_background_color,

example

```php
     protected static string $font_size_header = '14px';
     /**
      * @var string
      * REQURED!
      * Set font-size to body table
      */
     protected static string $font_size_body = '12px';
     /**
      * @var string
      * REQURED!
      * Set color-font to body table, example #e1e1e1
      */
     protected static string $body_row_background_color = 'red';
```