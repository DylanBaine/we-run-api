<?php

namespace App\Models\Social;

use App\Models\User;
use App\Jobs\SendFriendInvite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserFriend extends Model
{
    const STATUS_ACCEPTED = "accepted";
    const STATUS_PENDING = "pending";
    const STATUS_DECLINED = "declined";

    use HasFactory;

    protected $fillable = [
        'invitee_id',
        'inviter_id',
        'status',
    ];

    protected static function booting()
    {
        static::creating(function(self $userFriend) {
            $userFriend->status = static::STATUS_PENDING;
        });

        static::created(function(self $userFriend) {
            dispatch(new SendFriendInvite($userFriend));
        });
    }

    public function invitee()
    {
        return $this->belongsTo(User::class);
    }

    public function inviter()
    {
        return $this->belongsTo(User::class);
    }
}
