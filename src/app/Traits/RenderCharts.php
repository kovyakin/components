<?php
/*
 * MIT License
 * Copyright (c) 2024 Kovyakin Dmitry kdv-1974@mail.ru
*/

declare(strict_types=1);

namespace Kovyakin\Components\app\Traits;

use Illuminate\Contracts\View\View;

trait RenderCharts
{
    public static function view(): View
    {
        return view('components::charts')->with([
            'className' => self::getClassName(),
            'type' => self::$type,
            'control_hover' => !empty(self::$control_hover),
            'x_axis' => json_encode(self::$x_axis, JSON_UNESCAPED_UNICODE),
            'y_axis' => json_encode(self::y_axis(), JSON_UNESCAPED_UNICODE),
            'chart_size' => isset(self::$chart_size)  ? json_encode(self::$chart_size, JSON_UNESCAPED_UNICODE) :
                null,
            'margin' => isset(self::$margin) ? json_encode(self::$margin, JSON_UNESCAPED_UNICODE) : null,
            'direction' => !empty(self::$direction) ? self::$direction : null,
            'stroke_dasharray' => self::$stroke_dasharray ?? null,
            'tooltip_show' => !empty(self::$tooltip_show) ? true : null,
            'marker' => isset(self::$marker) ? json_encode(self::$marker, JSON_UNESCAPED_UNICODE) : json_encode([],
                JSON_UNESCAPED_UNICODE),
            'use_modal' => !empty(self::$use_modal),
            'modal' => isset(self::$modal) ? json_encode(self::$modal, JSON_UNESCAPED_UNICODE) : json_encode('',
                JSON_UNESCAPED_UNICODE),
            'select' => !empty(self::$select) ? self::$select : null,
        ]);
    }

}