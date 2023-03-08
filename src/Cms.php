<?php

namespace Src;

use Src\Contracts\LoginViewResponse;
use Src\Http\Responses\SimpleViewResponse;

class Cms
{
    public static function loginView($view)
    {
        app()->singleton(LoginViewResponse::class, function () use ($view) {
            return new SimpleViewResponse($view);
        });
    }
}
