<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Log;

class RecordLastActivedTime
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
        Log::info('In  middleware');
//        Log::info(Auth::user()->toArray());
        if (Auth::check()){
            Log::info('use logged in');
            Auth::user()->recordLastActivedAt();
        }
        return $next($request);
    }
}
