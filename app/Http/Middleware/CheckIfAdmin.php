<?php
/**
 * Created by PhpStorm.
 * User: Monika
 * Date: 8/9/2017
 * Time: 9:15 AM
 */

namespace App\Http\Middleware;
use Closure;

class CheckIfAdmin
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
        if( auth()->user())
        {
            return $next($request);
        } else {
            return redirect('login');
        }
    }
}