<?php

namespace App\Models;

use Illuminate\Support\Str;
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
    }

    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    public function inviter()
    {
        return $this->belongsTo(User::class);
    }

    public function acceptBy(User $user): RaceParticipant
    {
        return $this->race->participants()->create([
            'participant_id' => $user->id,
            'inviter_id' => $this->inviter_id,
        ]);
    }
}
