<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;
class OrderControlsell
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
          // if ($request->hidden_convertedAmount>500 && $request->hidden_currencyType='USD') {
             return redirect()->route('login')->with('error','Make Order Please Login First If Don’t have Account then Register First.');
        // }

      }

       
          if (Auth::check()) {
           if (empty(Auth::user()->email_verified_at)) {
            return redirect('/email/verify');
        }
        }

        

       return $next($request);
       

 
         

        
    }
}
