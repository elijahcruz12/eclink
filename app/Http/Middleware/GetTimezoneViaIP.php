<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GetTimezoneViaIP
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
        $ip = $_SERVER['REMOTE_ADDR'];
        $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
        $ipInfo = json_decode($ipInfo);
        if($ipInfo->status != 'fail') {
            $timezone = $ipInfo->timezone;
            date_default_timezone_set($timezone);
        }

        return $next($request);
    }
}
