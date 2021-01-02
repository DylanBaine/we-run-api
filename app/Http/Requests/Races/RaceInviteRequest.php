<?php

namespace App\Http\Requests\Races;

use App\Models\Races\RaceInvite;
use Orion\Http\Requests\Request;

class RaceInviteRequest extends Request
{
    public function commonRules(): array
    {
        $contactMethods = [
            RaceInvite::METHOD_EMAIL,
            RaceInvite::METHOD_PHONE,
            RaceInvite::METHOD_USER_ID
        ];
        return [
            'contact_method_value' => 'required',
            'contact_method_name' => 'required|in:'.implode(',', $contactMethods)
        ];
    }
}
