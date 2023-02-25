<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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

        if(Session()->has('adminId')){

            return $next($request);


        }else{

            $notification = [

                'message'=> 'Login First Then Entry',
                'type' => 'error',

            ];

            return redirect()->route('admin.login')->with($notification);
        }

        
    }
}
