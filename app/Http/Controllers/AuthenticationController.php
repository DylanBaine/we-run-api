<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @group Auth
 */
class AuthenticationController extends Controller
{

    /**
     * Register a new user
     * 
     * @bodyParam name string required
     * @bodyParam email string required
     * @bodyParam phone string required
     * @bodyParam password string required
     */
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);
        $user = User::registerAndLogIn($data['name'], $data['email'], $data['password']);
        $response = array_merge($user->toArray(), [
            'token' => $user->currentAccessToken()->plainTextToken
        ]);
        return $response;
    }

    /**
     * Get the current user
     *
     */
    public function user(Request $request)
    {
        return $request->user();
    }

    /**
     * Log In
     * 
     * @bodyParam email string required
     * @bodyParam password string required
     */
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

    /**
     * Delete a users api tokens
     * 
     */
    public function deleteTokens(Request $request)
    {
        $request->user()->tokens()->delete();
    }
}
