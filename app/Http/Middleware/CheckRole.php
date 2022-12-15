<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Client\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class CheckRole extends Middleware{
    public function handle(Request $request, Closure $next){
        $roles = array_slice(func_get_args(), 2);
        foreach ($roles as $role){
            $user = Auth::user()->role;
            if($user == $role){
                return $next($request);
            }
        }
        return redirect('/'); 
    }  
}