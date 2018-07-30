<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AppMiddleware
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
        if(getOption('app_is_active') == 0){
            return new Response(view('inactive'));
        }
        return $next($request);
    }
}
