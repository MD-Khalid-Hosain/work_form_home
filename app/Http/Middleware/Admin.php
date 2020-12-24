<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
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
        $response = $next($request);
        if(!Auth::guard('admin')->check() || Auth::guard('admin')->user()->status != 1){
            Auth::guard('admin')->logout();
            return redirect('/admin/login');
        }
        return $response;
    }
}
