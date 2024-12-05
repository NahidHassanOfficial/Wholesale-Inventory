<?php

namespace App\Http\Controllers\Auth;

use App\Helper\JWTHelper;
use App\Helper\Response;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
    {
        try {
            $validatedRequest = request()->validate([
                'name' => 'required|between:4,20',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required|digits:11|numeric',
                'password' => 'required|min:8',
            ]);
        } catch (ValidationException $e) {
            return Response::validationError($e->errors());
        }

        $validatedRequest['password'] = Hash::make($validatedRequest['password']);
        try {
            User::create($validatedRequest);
            return Response::success('Registration Successful');
        } catch (\Exception $e) {
            return Response::error();
        }
    }

    public function login()
    {
        try {
            request()->validate([
                'email' => 'required|email',
                'password' => 'required',
                'remember' => 'required|boolean',
            ]);
        } catch (ValidationException $e) {
            return Response::validationError($e->errors());
        }

        $email = request()->email;
        $password = request()->password;

        $user = User::where('email', $email)->first();
        if ($user && Hash::check($password, $user->password)) {
            if (request()->input('remember') === true) {
                $time = time() + 60 * 60 * 24 * 30;
            } else {
                $time = time() + 60 * 60 * 24;
            }
            $token = JWTHelper::createToken($email, $user->id, 'user', $time);
            return Response::success('Login Successful', ['token' => $token]);
        } else {
            return Response::unauthorized();
        }

    }

    public function logout()
    {

    }
}
