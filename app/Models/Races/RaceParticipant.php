<?php

namespace App\Models\Races;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RaceParticipant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'inviter_id',
        'race_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function inviter()
    {
        return $this->belongsTo(User::class);
    }

    public function race()
    {
        return $this->belongsTo(Race::class);
    }

}
