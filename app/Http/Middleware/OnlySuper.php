<?php

namespace App\Http\Middleware;

use Closure;

class OnlySuper
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
        if (!auth()->user()->super) {
            return redirect()->guest(route('blog.index'));
        }

        return $next($request);
    }
}
