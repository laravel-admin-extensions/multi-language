<?php

namespace KevinSoft\MultiLanguage\Middlewares;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use KevinSoft\MultiLanguage\MultiLanguage;

class MultiLanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        $languages = MultiLanguage::config('languages');
        $cookie_name = MultiLanguage::config('cookie-name', 'locale');

        if (Cookie::has($cookie_name) && array_key_exists(Cookie::get($cookie_name), $languages)) {
            App::setLocale(Cookie::get($cookie_name));
        } else {
            $default = MultiLanguage::config('default');
            App::setLocale($default);
        }
        return $next($request);
    }
}
