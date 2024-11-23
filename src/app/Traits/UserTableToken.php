<?php
/*
 * MIT License
 * Copyright (c) 2024 Kovyakin Dmitry kdv-1974@mail.ru
 */

declare(strict_types=1);

namespace Kovyakin\Components\app\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

trait UserTableToken
{
    public static function token(): string|null
    {
        $user = auth()->user();

        if(!$user){
            abort(401);
        }

        $token = $user->tokens->where('name', 'api_table')->first();

        if ($token) {
            $token->delete();
        }
        $new_token = $user->createToken('api_table');

        return $new_token->plainTextToken;
    }

}