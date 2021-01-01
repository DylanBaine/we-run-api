<?php

namespace App\Models\Social;

use App\Jobs\SendFriendInvite;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFriend extends Model
{
    const STATUS_ACCEPTED = "accepted";
    const STATUS_PENDING = "pending";
    const STATUS_DECLINED = "declined";

    use HasFactory;

    protected $fillable = [
        'invitee_id',
        'invitor_id',
        'status',
    ];

    protected static function booting()
    {
        static::creating(function(self $userFriend) {
            if (auth()->check()) {
                $userFriend->invitor_id = auth()->id();
            }
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

    public function invitor()
    {
        return $this->belongsTo(User::class);
    }
}
