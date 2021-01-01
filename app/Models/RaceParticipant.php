<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceParticipant extends Model
{
    use HasFactory;

    protected $fillable = [
        'participant_id',
        'inviter_id',
        'race_id',
    ];

    public function participant()
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
