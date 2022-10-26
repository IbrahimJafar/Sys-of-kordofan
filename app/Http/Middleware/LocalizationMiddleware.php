<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LocalizationMiddleware
{

    public function handle($request, Closure $next)
    {

        $appLocale = Session::get('appLocale',Config::get('app.fallback_locale'));
        App::setLocale($appLocale);
        return $next($request);
    }
}
