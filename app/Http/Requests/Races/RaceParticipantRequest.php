<?php

namespace App\Http\Requests\Races;

use Orion\Http\Requests\Request;

class RaceParticipantRequest extends Request
{
    public function commonRules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'inviter_id' => 'nullable|exists:users,id',
        ];
    }
}
