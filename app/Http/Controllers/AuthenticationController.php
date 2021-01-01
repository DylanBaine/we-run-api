<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:10',
        ]);
        $user = User::registerAndLogIn($data['name'], $data['email'], $data['password']);
        $response = array_merge($user->toArray(), [
            'token' => $user->currentAccessToken()->plainTextToken
        ]);
        return $response;
    }

    public function user(Request $request)
    {
        return $request->user();
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
        $authorized = Auth::attempt($data);
        if ($authorized) {
            /**
             * @var User $user
             */
            $user = User::whereEmail($data['email'])->first();
            Auth::login($user);
            return $user->withAccessToken('auth');
        }
    }

    public function deleteTokens(Request $request)
    {
        $request->user()->tokens()->delete();
    }
}
