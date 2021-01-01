<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use App\Jobs\SendInviteToRecipient;
use App\Models\Social\UserFriend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function registerAndLogIn(string $name, string $email, string $password): self
    {
        /**
         * @var User
         */
        $user = static::create(compact('name', 'email', 'password'));
        Auth::login($user);
        return $user->withAccessToken(
            $user->createToken('auth')
        );
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function invites()
    {
        return $this->hasMany(RaceInvite::class, 'inviter_id');
    }

    public function races()
    {
        return $this->hasMany(Race::class, 'created_by_id');
    }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'invitor_id', 'invitee_id')
            ->whereStatus(UserFriend::STATUS_ACCEPTED);
    }

}
