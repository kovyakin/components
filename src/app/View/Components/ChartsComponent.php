<?php
/*
 * MIT License
 * Copyright (c) 2024 Kovyakin Dmitry kdv-1974@mail.ru
 */

namespace Kovyakin\Components\app\View\Components;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Kovyakin\Components\app\Interfaces\Components as Charts;

class ChartsComponent extends Component
{
    public Charts $model;

    public function __construct($charts)
    {
//        dd( app('App\Components\Table\\'. $table));
        $this->model = app('App\Components\Charts\\'. $charts) ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return $this-> model::render();
    }
}
