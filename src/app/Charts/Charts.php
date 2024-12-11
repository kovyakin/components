<?php
/*
 * MIT License
 * Copyright (c) 2024 Kovyakin Dmitry kdv-1974@mail.ru
 */

declare(strict_types=1);

namespace Kovyakin\Components\app\Charts;

use Illuminate\Contracts\View\View;
use Kovyakin\Components\app\Interfaces\Components;
use Kovyakin\Components\app\Traits\ClassName;

class Charts implements Components
{
    use ClassName;
    use \Kovyakin\Components\app\Traits\RenderCharts;

    protected static string $type = 'line'; // line|bar|pie

    protected static bool $control_hover = true;

    protected static string|bool $stroke_dasharray = "2,2"; // grid

    protected static array $chart_size = [];

    protected static array $margin = [];

    protected static string $direction = "horizontal"; //horizontal|vertical

    protected static bool $tooltip_show = true;

    protected static array $marker = [];

    protected static array $x_axis = [];

    protected static bool $use_modal = true;

    protected static function y_axis(): array
    {
        return [];
    }


    public static function render(): View
    {
        return self::view();
    }

}