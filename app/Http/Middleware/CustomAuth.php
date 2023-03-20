<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use Illuminate\Http\Request;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();
         // For Admin section Middeware Start
        if($path == 'BackEnd' && Session::get('sessdata'))
        {
            return redirect('/BackEnd/dashboard');
        }

        if(
            ($path == 'BackEnd/dashboard' && !Session::get('sessdata'))
         || ($path == 'BackEnd/chan4545101dgf4r3645pass35fh34' && !Session::get('sessdata'))
         || ($path == 'BackEnd/product' && !Session::get('sessdata'))
         || (strpos($path, 'BackEnd/productForm') !== false && !Session::has('sessdata'))
         // || ($path == 'BackEnd/agent' && !Session::get('sessdata'))
         // || (strpos($path, 'BackEnd/agentForm') !== false && !Session::has('sessdata'))
         // || ($path == 'BackEnd/user' && !Session::get('sessdata'))
         // || (strpos($path, 'BackEnd/userForm') !== false && !Session::has('sessdata'))
         // || ($path == 'BackEnd/device' && !Session::get('sessdata'))
         // || (strpos($path, 'BackEnd/devicesForm') !== false && !Session::has('sessdata'))
         // || ($path == 'BackEnd/service' && !Session::get('sessdata'))
         // || (strpos($path, 'BackEnd/servicesForm') !== false && !Session::has('sessdata'))

         // || ($path == 'BackEnd/chan4545101dgf4r3645pass35fh34' && !Session::get('sessdata'))
         // || ($path == 'BackEnd/ticket' && !Session::get('sessdata'))
         // || (strpos($path, 'BackEnd/tdetails') !== false && !Session::has('sessdata'))

        )
        {
            return redirect('/BackEnd');
        }

    // For Admin section Middeware End

        return $next($request);
    }
}
