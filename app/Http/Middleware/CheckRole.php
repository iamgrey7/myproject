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
        //$role = $request->user()->role;
        if (! $request->user()->hasRole($role)) {
            abort(401, 'This Action is unauthorized');
        }
        return $next($request);   

        //multiple roles
        // if (! $request->user()->authorizeRoles($role)) { 
        //     abort(401, 'This action is unauthorized.');
        // }

        // if(auth()->user()->CheckRole()) {
        //     return $next($request);
        // }
        // return redirect('home');

        
        
    }

    private function CheckAdmin()
    {
        if (!Auth::user()->role == 'admin') {
            return false;    
        }    
    }
    
}
