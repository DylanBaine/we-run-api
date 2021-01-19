<?php

namespace App\Http\Controllers;

use App\Http\Resources\CurrentUserResource;
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
     * 
     * @responseFile responses/auth/with-token.json
     */
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);
        $userExists = User::whereEmail($request->email)->exists();
        if ($userExists) {
            return $this->login($request);
        }
        $user = User::registerAndLogIn($data['name'], $data['email'], $data['password']);
        $response = new CurrentUserResource($user);
        return $response;
    }

    /**
     * Get the current user
     *
     * @responseFile responses/auth/current.json
     */
    public function user(Request $request)
    {
        return new CurrentUserResource($request->user());
    }

    /**
     * Log In
     * 
     * @bodyParam email string required
     * @bodyParam password string required
     * 
     * @responseFile responses/auth/with-token.json
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
            return new CurrentUserResource($user->withAccessToken(
                $user->createToken('auth')
            ));
        } else {
            return response()->json([
                'message' => 'Invalid Credentials',
            ], 422);
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
