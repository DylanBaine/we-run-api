<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by_id',
        'start_time',
        'distance_number',
        'distance_units'
    ];

    protected $casts = [
        'start_time' => 'datetime',
    ];

    public function invites()
    {
        return $this->hasMany(RaceInvite::class);
    }

    public function participants()
    {
        return $this->hasMany(RaceParticipant::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class);
    }
}
