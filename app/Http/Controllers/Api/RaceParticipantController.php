<?php

namespace App\Http\Controllers\Api;

use App\Models\Race;
use Orion\Http\Controllers\RelationController;

class RaceParticipantController extends RelationController
{
    protected $model = Race::class;

    protected $relation = 'participants';
}
