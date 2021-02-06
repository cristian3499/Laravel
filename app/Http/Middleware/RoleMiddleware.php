<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware {
    public function handle($request, Closure $next)
    {

        return redirect('/');
        /* return $next($request); */
    }
}
?>