<?php

namespace App\Http\Middleware;

use App\Helper\JWTHelper;
use Closure;
use Illuminate\Http\Request;

class AuthRedirectMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $requestedRoute = $request->route()->getName();
        $token = $request->cookie('token');
        if (!$token) {
            $bearerToken = $request->header('Authorization');
            if (!$bearerToken) {

                //if no token exist then let the request pass to next if route name matches
                if ($requestedRoute == 'login' || $requestedRoute == 'register') {
                    return $next($request);
                }

                return redirect(route('login'));
            }
            $token = str_replace('Bearer ', '', $bearerToken);
        }

        $result = JWTHelper::verifyToken(token: $token);
        if ($result == "unauthorized") {
            if ($requestedRoute === 'login') {
                return $next($request);
            } else {
                return redirect(route('login'));
            }
        } else {

            //if current route equal to login or register then redirect to dashboard
            if ($requestedRoute == 'login' || $requestedRoute == 'register') {
                return redirect(route('dashboard'));
            }

            return $next($request);
        }

    }
}
