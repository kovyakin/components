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
            'data' => json_encode(self::$data, JSON_UNESCAPED_UNICODE)
        ]);
    }

}