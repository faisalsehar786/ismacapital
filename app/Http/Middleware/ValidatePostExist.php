<?php

namespace App\Http\Middleware;

use Closure;
use App\Post;

class ValidatePostExist
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


         $count = Post::where('is_softdel', 'no')->count();
        if ($count < 1)
        {

            return redirect('admin/add_post')->with('error', 'Please Add Minimumm 1 Post Type First ...');
            
        }
       
        
        return $next($request);  
        
       
    }
}
