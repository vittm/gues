<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;
use Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        $language = Request::segment(1);
        Session::put('website_language', $language);
        App::setLocale($language);
        return $next($request);
    }
}
