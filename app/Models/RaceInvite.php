<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    public function inviter()
    {
        return $this->belongsTo(User::class);
    }
}
