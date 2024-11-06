<?php

declare(strict_types=1);

namespace Kovyakin\Components\app\Interfaces;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

interface Table
{
    public static function getClassName():string;
    public static function render():View;

}