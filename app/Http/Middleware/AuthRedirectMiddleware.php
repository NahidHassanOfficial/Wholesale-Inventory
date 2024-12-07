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
        $token = $request->cookie('token');
        if (!$token) {
            $bearerToken = $request->header('Authorization');
            if (!$bearerToken) {
                return redirect(route('login'));
            }
            $token = str_replace('Bearer ', '', $bearerToken);
        }

        $result = JWTHelper::verifyToken(token: $token);
        if ($result == "unauthorized") {
            return redirect(route('login'));
        } else {
            return $next($request);
        }

    }
}
