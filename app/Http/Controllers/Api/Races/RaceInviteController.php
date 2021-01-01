<?php

namespace App\Http\Controllers\Api\Races;

use App\Models\Race;
use Orion\Http\Requests\Request;
use Illuminate\Database\Eloquent\Builder;
use Orion\Http\Controllers\RelationController;

/**
 * @group Races/Invites
 */
class RaceInviteController extends RelationController
{
    protected $model = Race::class;

    protected $relation = 'invites';

    /**
     * Create a race invite.
     * Will trigger a notification to be sent to the person that is being invited.
     *
     * @bodyParam contact_method_value string required the user_id, phone number, or email of the person to invite
     * @bodyParam contect_method_name string required the method to use to notify the user of the invite
     */
    public function store(Request $request, $parentKey)
    {
        return parent::store($request, $parentKey);
    }

    /**
     * Update a race invite.
     * Will trigger a notification to be sent to the person that is being invited.
     *
     * @bodyParam contact_method_value string required the user_id, phone number, or email of the person to invite
     * @bodyParam contect_method_name string required the method to use to notify the user of the invite
     */
    public function update(Request $request, $parentKey, $relatedKey = null)
    {
        return parent::update($request, $parentKey, $relatedKey);
    }

    /**
     * Delete a race invite.
     *
     */
    public function delete(Request $request)
    {
        return parent::delete($request);
    }
}
