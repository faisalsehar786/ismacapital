<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class RedirectAuthPlayer
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

         if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 1) {
        return redirect()->route('dashboard');
        }else {

            return $next($request);
        }

       

      


        
    }
}
