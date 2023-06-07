<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\AuthResource;
use Illuminate\Support\Facades\Response;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        if (!Auth::attempt($request->validated())) {
            return Response::json(['error' => 'Неверный логин или пароль'], 400);
        }

        $user = Auth::user();

        $token = $user->createToken('upshift')->plainTextToken;

        return Response::json(AuthResource::make($user, $token));
    }
}
