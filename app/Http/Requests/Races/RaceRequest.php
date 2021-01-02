<?php

namespace App\Http\Requests\Races;

use Orion\Http\Requests\Request;

class RaceRequest extends Request
{
    public function commonRules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'start_time' => 'required|date',
            'distance_number' => 'required|numeric',
            'distance_units' => 'required',
        ];
    }
}
