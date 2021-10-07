<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use StaticArray;

class CheckAdminSideRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()) {
            $roles = $request->user()->roles;
            foreach ($roles as $role) {
                if (!in_array($role->name, StaticArray::$admin_side)) {
                    abort(403);
                }
            }
        }
        return $next($request);
    }
}
