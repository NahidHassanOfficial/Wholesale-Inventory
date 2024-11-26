<?php

namespace App\Helper;

class Response
{
    public static function Out($status, $msg = "Something went wrong!", $data = null, $code = 400)
    {
        return response()->json(
            [
                'status' => $status,
                'message' => $msg,
                'data' => $data,
            ],
            $code);
    }

    public static function success($msg = "Request successful", $data = null, $code = 200)
    {
        return self::Out('success', $msg, $data, $code);
    }

    public static function error($msg = "Request failed", $data = null, $code = 400)
    {
        return self::Out('failed', $msg, $data, $code);
    }

    public static function unauthorized($msg = "Unauthorized access", $data = null)
    {
        return self::Out('unauthorized', $msg, $data, 401);
    }
}
