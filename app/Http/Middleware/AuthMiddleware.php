<?php

namespace App\Http\Middleware;

use App\Helper\JWTHelper;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->cookie('token');

        $result = JWTHelper::verifyToken(token: $token);
        if ($result == "unauthorized") {
            return redirect()->guest(route('login'));
        } else {
            $request->headers->set('email', $result->userEmail);
            $request->headers->set('id', $result->userId);
            $request->headers->set('role', $result->role);
            return $next($request);
        }
    }
}
