<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Jobs\SendInviteToRecipient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RaceInvite extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'contact_method_value',
        'contact_method_name',
        'race_id',
        'inviter_id',
    ];

    protected static function booting()
    {
        static::creating(function(self $invite) {
            $invite->code = Str::random(4);
        });

        static::created(function(self $invite) {
            dispatch(new SendInviteToRecipient($invite));
        });

        static::updated(function(self $invite) {
            dispatch(new SendInviteToRecipient($invite));
        });
    }

    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    public function inviter()
    {
        return $this->belongsTo(User::class);
    }
}
