<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        return $next($request);
    }
}
