<?php
/*
 * MIT License
 * Copyright (c) 2024 Kovyakin Dmitry kdv-1974@mail.ru
 */

declare(strict_types=1);

namespace Kovyakin\Components\app\Traits;

use Illuminate\Support\Facades\Cache;

class GetQueryIndexTable
{
    public function getQueryIndexTable($request): void
    {
        $sortBy = $request->query('sortBy');

        $sortType = $request->query('sortType');

        $limit = $request->query('limit');



        if( $sortBy == "null"){
            $sortBy = 'id';
        }

        if( $sortType == "null" ){
            $sortType = 'asc';
        }

        if( $limit == "null"){
            $limit = 10;
        }

        Cache::set('sortBy', $sortBy);
        Cache::set('sortType', $sortType);
        Cache::set('limit', $limit);
        Cache::set('page', $request->page);
    }
}