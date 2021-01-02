<?php

namespace App\Http\Controllers\Api\Social;

use App\Http\Requests\Social\UserFriendRequest;
use Orion\Http\Requests\Request;
use App\Models\Social\UserFriend;
use Orion\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @group Social
 */
class UserFriendController extends Controller
{
    protected $model = UserFriend::class;

    protected $request = UserFriendRequest::class;

    /**
     * @inheritDoc
     *
     * @param Request $request
     * @param UserFriend $userFriend
     * @return void
     */
    protected function beforeSave(Request $request, Model $userFriend)
    {
        $userFriend->inviter()->associate($request->user());
    }

    public function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        return $request->user()->friends()->with($requestedRelations);
    }

    /**
     * Create a friend request.
     * Request another user to be a friend. Will send a notification to the user being invited.
     *
     * @bodyParam invitee_id int required the id of the user to invite as a friend
     */
    public function store(Request $request)
    {
        return parent::store($request);
    }

    /**
     * Update a friend request.
     * Accept or remove the request.
     *
     * @bodyParam status string required can be updated to "accepted" or "declined"
     */
    public function update(Request $request, $key)
    {
        return parent::update($request, $key);
    }

    /**
     * Delete an invite or friend relationship.
     */
    public function delete(Request $request)
    {
        return parent::delete($request);
    }
}
