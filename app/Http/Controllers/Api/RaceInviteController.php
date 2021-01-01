<?php

namespace App\Http\Controllers\Api;

use App\Models\Race;
use Orion\Http\Controllers\RelationController;

class RaceInviteController extends RelationController
{
    protected $model = Race::class;

    protected $relation = 'invites';
}
