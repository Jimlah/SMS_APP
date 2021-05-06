<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventLeaveIfLoggedIn
{
    /**
     * Get User path and redirect them When they are authenticated
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()) {
            return redirect(route('students.index'));
        }

        return $next($request);
    }
}
