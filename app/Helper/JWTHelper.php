<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTHelper
{
    public static function createToken($userEmail, $userId, $role, $time)
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => env('APP_NAME'),
            'iat' => time(),
            'exp' => $time,
            'userEmail' => $userEmail,
            'userId' => $userId,
            'role' => $role,
        ];
        dd(JWT::encode($payload, $key, 'HS256'));
        return JWT::encode($payload, $key, 'HS256');
    }

    public static function verifyToken($token)
    {
        try {
            if ($token == null) {
                return 'unauthorized';
            } else {
                $key = env('JWT_KEY');
                return JWT::decode($token, new Key($key, 'HS256'));
            }
        } catch (Exception $e) {
            return 'unauthorized';
        }
    }
}
