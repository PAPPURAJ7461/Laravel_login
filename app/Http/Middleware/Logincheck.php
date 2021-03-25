<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class Logincheck
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
        $path= $request->path();
         
        if (($path=='login1'||$path=='sign_up')&& Session::has('email'))
        {
                   
           return redirect('dashboard');
        }
        elseif (($path!='login1'||$path!='sign_up') && !Session::get('email')) {
          
           Session::flash('message', "Access denied.");
           Session::flash('class', "alert-danger");
           return redirect('login1');
        }

              
        
        return $next($request);
    }
}
