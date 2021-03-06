<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Route;


use Closure;
use Illuminate\Http\Request;

class myAuth
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
        // dd($request);
        // dd(Route::currentRouteName());
        if (session('auth'))
        {
            if(array_search(Route::currentRouteName(),array_column(session()->get('permisos'),'permisosRuta'))> -1)
               return $next($request);
            else
              return redirect()->route('home'); 
        }    
        else

           return redirect()->route('auth.index');
    }
}
