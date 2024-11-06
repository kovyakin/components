<?php

declare(strict_types=1);

namespace Kovyakin\Components\app\Traits;

trait ClassName
{
    public static function getClassName() :string
    {
        $class_name = static::class;
        $array = explode('\\', $class_name);
        return end($array);
    }
}