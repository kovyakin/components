<?php
/*
 * MIT License
 * Copyright (c) 2024 Kovyakin Dmitry kdv-1974@mail.ru
 */

namespace Kovyakin\Components\app\View\Components;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Kovyakin\Components\app\Interfaces\Table;

class TableComponent extends Component
{
    public Table $model;
    /**
     * Create a new component instance.
     */
    public function __construct($table)
    {
//        dd( app('App\Components\Table\\'. $table));
       $this->model = app('App\Components\Table\\'. $table) ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return $this-> model::render();
    }
}
