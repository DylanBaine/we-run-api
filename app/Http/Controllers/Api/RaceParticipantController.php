<?php

namespace App\Http\Controllers\Api;

use App\Models\Race;
use Orion\Http\Requests\Request;
use Orion\Http\Controllers\RelationController;

/**
 * @group Races/Participants
 */
class RaceParticipantController extends RelationController
{
    protected $model = Race::class;

    protected $relation = 'participants';

    /**
     * Create a race participant.
     *
     * @bodyParam user_id number required
     * @bodyParam inviter_id number required
     */
    public function store(Request $request, $parentKey)
    {
        return parent::store($request, $parentKey);
    }

    /**
     * Update a race participant.
     *
     * @bodyParam user_id number required
     * @bodyParam inviter_id number required
     */
    public function update(Request $request, $parentKey, $relatedKey = null)
    {
        return parent::update($request, $parentKey, $relatedKey);
    }

    /**
     * Delete a race participant.
     *
     */
    public function delete(Request $request)
    {
        return parent::delete($request);
    }
}
