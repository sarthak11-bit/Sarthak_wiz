<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Map role names to numeric values
        $roleMapping = [
            'superadmin' => 1,
            'admin' => 2,
        ];

        // Check if the role passed matches the user's role
        if (Auth::check() && Auth::user()->role == $roleMapping[$role]) {
            return $next($request);
        }

        return redirect('/login')->with('error', 'Unauthorized Access');
    }
}
