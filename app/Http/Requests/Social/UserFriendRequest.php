<?php

namespace App\Http\Requests\Social;

use App\Models\Social\UserFriend;
use Orion\Http\Requests\Request;

class UserFriendRequest extends Request
{

    public function createRules(): array
    {
        return [
            'invitee_id' => 'required|exists:users,id'
        ];
    }

    public function updateRules(): array
    {
        $availableStatuses = [
            UserFriend::STATUS_ACCEPTED,
            UserFriend::STATUS_DECLINED,
        ];
        return [
            'status' => 'requried|in'.implode(',', $availableStatuses),
        ];
    }
}
