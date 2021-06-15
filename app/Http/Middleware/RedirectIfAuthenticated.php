<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

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



        // if (Auth::guard($guard)->check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }
          
      

        //   if ($guard == "admin" && Auth::guard($guard)->check()) {
        //     return redirect('/admin');
        // }
        // // if ($guard == "blogger" && Auth::guard($guard)->check()) {
        // //     return redirect('/blogger');
        // // }
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/loginc');
        // }

        // return $next($request);

   
       
         switch ($guard) {


            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect('/admin');
                }
            break;

            default:
                if (Auth::guard($guard)->check()) {
                     return redirect(RouteServiceProvider::HOME);
                }
            break;
        }

        return $next($request);
    }
}
