<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class RedirectIfNotAdmin
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
        if(!$request->user()->isAnAdmin()){
            return redirect('recipes');
        }


        return $next($request);
    }
}
