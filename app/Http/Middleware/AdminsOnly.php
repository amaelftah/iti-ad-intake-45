<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class AdminsOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $someCondition = true; // && ||

        if($someCondition) {
            return $next($request);
        } else {
            //redirection
            //throw exception
            //send email
            throw new Exception('you arenot an admin user');
        }

    }
}
