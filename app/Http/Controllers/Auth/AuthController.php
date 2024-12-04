<?php

namespace App\Http\Controllers\Auth;


use App\Helper\JWTHelper;
use App\Helper\Response;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $data = User::create($request->all());
            return Response::success("User create successfully", $data);
        } catch (\Throwable $th) {
            return Response::error('User create fail');
        }
    }






    public function login(Request $request)
    {
        try {
            $UserEmail = $request->email;
            $Password = $request->password;

            $user = User::Where('email', $UserEmail)->where('password', $Password)->first();

            if ($user) {
                $token = JWTHelper::CreateToken($UserEmail, $user->id, '1', time() + 24 * 60 * 60);
                return Response::Out(200, 'success', $token)->cookie('token', $token, 60 * 24 * 30);
            } else {
                return Response::error('Incorrect email or password.');
            }
        } catch (\Exception $e) {
            return Response::error($e);
        }
    }

    public function logout() {}
}
