<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Roles
{

    public static $_role = [
        "ADMIN" => 1,
        "USER" => 0
    ];

    public static function currentRoles(){
        return Auth::user()->role == Roles::$_role["ADMIN"] ? "admin" : "user";
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check())
            return redirect('login');

        foreach ($roles as $role) {
            if (Auth::user()->role == $role)
                return $next($request);
        }

        return redirect('login');
    }
}
