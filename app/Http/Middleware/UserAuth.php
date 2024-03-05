<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    public function handle($request, Closure $next)
    {
		
		if(!$request->session()->has('username'))
		{
		$request->session()->flash('alert','Access Denied!!!');
		return redirect('/');	
		}

	
        return $next($request);
    }
}
