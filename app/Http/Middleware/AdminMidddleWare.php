<?php

namespace App\Http\Middleware;

use Brian2694\Toastr\Facades\Toastr;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMidddleWare
{
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::guard('admin')->check()){
            Toastr::error("Action restricted!");
            return redirect('/b2b/admin_login');
        }
        return $next($request);
    }
}
