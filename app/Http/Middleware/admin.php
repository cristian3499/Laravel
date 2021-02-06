<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin {
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
    if (!$user->admin()) {
        return redirect('/'); 
    }
     /*    return redirect('/'); */
        return $next($request);
    }
}
?>