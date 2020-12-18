<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CheckIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $adminArray = Config::get('eclink.admin_emails');

        $userEmail = $request->user()->email;

        if(!in_array($userEmail, $adminArray)){
            return redirect('dashboard');
        }

        return $next($request);
    }
}
