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

     /**
     * @var string
     * required
     * Type charts: line|bar|pie
     */
    protected static string $type = 'line'; // line|bar|pie

    /**
     * @var bool
     * Selecting a chart type on a form
     */
    protected static bool $select = false;

    /**
     * @var bool
     * displaying the  points on the form
     */
    protected static bool $control_hover = false;

    /**
     * @var string|bool
     * Setting up a graph grid
     */
    protected static string|bool $stroke_dasharray = "2,2"; // grid

    /**
     * @var array|int[]
     * graph size
     */
    protected static array $chart_size = [
        'width' => 700, // width chart
        'height' => 300,// height chart
        'bar_max_width' => 30, // only type bar
    ];

    /**
     * @var array|int[]
     * Setting up chart indents on the form
     */
    protected static array $margin = [
        'left' => 10,
        'top' => 40,
        'right' => 0,
        'bottom' => 0
    ];

    /**
     * @var string
     * direction charts: horizontal|vertical
     */
    protected static string $direction = "horizontal"; //horizontal|vertical

    /**
     * @var bool
     *displaying the values of the graph points on the form
     */
    protected static bool $tooltip_show = false;

    /**
     * @var array|array[]
     * Setting up marker lines
     * stroke_dasharray: Setting marker lines - length and gap
     */
    protected static array $marker = [];

    /**
     * @var array|string[]
     * required
     * X-axis
     */
    protected static array $x_axis = [];

    /**
     * @var bool
     * Show an enlarged chart by double-clicking on the chart
     */
    protected static bool $use_modal = false;

    /**
     * @var array|string[]
     * Modal window title
     */
    protected static array $modal=[
        'title'=>'Chart 1'
    ];

    /**
     * @return array[]
     * required
     * Y- axis
     * type:normal|natural|step|monotone;
     * color: color line;
     * label: show values points;
     * data: data y-axis;
     * linear_gradient: Set the graph fill gradient
     */
    protected static function y_axis(): array
    {
        return [];
    }

    /**
     * @return View
     * render: required
     */
    public static function render(): View
    {
        return self::view();
    }

}