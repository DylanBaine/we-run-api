<?php

use Orion\Facades\Orion;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Races\RaceController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Api\Races\RaceInviteController;
use App\Http\Controllers\Api\Races\RaceParticipantController;
use App\Http\Controllers\Api\Social\UserFriendController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);

Route::middleware('auth:sanctum')->group(function() {
    Route::delete('/tokens', [AuthenticationController::class, 'deleteTokens']);
    Route::get('/user', [AuthenticationController::class, 'user']);;

    Route::group(['as' => 'api.'], function() {
        Orion::resource('user-friends', UserFriendController::class);
        Orion::resource('races', RaceController::class);
        Orion::hasManyResource('races', 'race-invites', RaceInviteController::class);
        Orion::hasManyResource('races', 'race-participants', RaceParticipantController::class);
    });

});
