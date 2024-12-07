<?php

namespace App\Http\Middleware;

use App\Helper\JWTHelper;
use App\Helper\Response;
use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // $token = $request->cookie('token') ?? $request->header('Authorization');
        // $token = str_replace('Bearer ', '', $request->header('Authorization'));

        $token = $request->cookie('token');
        if (!$token) {
            $bearerToken = $request->header('Authorization');
            if (!$bearerToken) {
                return Response::unauthorized();
            }
            $token = str_replace('Bearer ', '', $bearerToken);
        }

        $result = JWTHelper::verifyToken(token: $token);
        if ($result == "unauthorized") {
            return Response::unauthorized();
        } else {
            $request->headers->set('email', $result->userEmail);
            $request->headers->set('id', $result->userId);
            $request->headers->set('role', $result->role);
            return $next($request);
        }
    }
}
