<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Zizaco\Entrust\EntrustFacade as Entrust;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
            
        if (Auth::guard($guard)->check()) {
            $user = Auth::user();
            if($user->is_wallet_linked)
            {
                if (Entrust::hasRole('User')) {
                    return redirect('/home');
                } 
                else if (Entrust::hasRole('Business')) {
                    return redirect('/business/home');
                }
                    
                return redirect('/home');
            }

            else
            {
                return redirect('/wallet_menu');
            }

        }

        return $next($request);
    }
}

