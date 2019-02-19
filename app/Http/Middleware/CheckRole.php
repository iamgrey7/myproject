<?php

namespace App\Http\Middleware;

use Closure;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // one role     
        // if (! $request->user()->hasRole($role)) {
        //     abort(401, 'This Action is unauthorized');
        // }
        

        //multiple roles
        if (! $request->user()->authorizeRoles($role)) { 
            abort(401, 'This action is unauthorized.');
        }

        return $next($request);  
    }

      
}
