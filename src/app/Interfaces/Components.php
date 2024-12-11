<?php

declare(strict_types=1);

namespace Kovyakin\Components\app\Interfaces;

use Illuminate\Contracts\View\View;

interface Components
{
    public static function getClassName():string;

    public static function render():View;

//    public static function token():string|null;

    public static function view(): View;

}