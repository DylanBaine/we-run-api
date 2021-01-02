<?php

namespace App\Policies\Social;

use App\Models\Social\UserFriend;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserFriendPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Social\UserFriend  $userFriend
     * @return mixed
     */
    public function view(User $user, UserFriend $userFriend)
    {
        return in_array($user->id, [
            $userFriend->invitee_id,
            $userFriend->inviter_id
        ]);
    }

    /**
     * Determine whether the user can create a request.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the status.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Social\UserFriend  $userFriend
     * @return mixed
     */
    public function update(User $user, UserFriend $userFriend)
    {
        return $user->id == $userFriend->invitee_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Social\UserFriend  $userFriend
     * @return mixed
     */
    public function delete(User $user, UserFriend $userFriend)
    {
        return in_array($user->id, [
            $userFriend->invitee_id,
            $userFriend->inviter_id
        ]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Social\UserFriend  $userFriend
     * @return mixed
     */
    public function restore(User $user, UserFriend $userFriend)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Social\UserFriend  $userFriend
     * @return mixed
     */
    public function forceDelete(User $user, UserFriend $userFriend)
    {
        return in_array($user->id, [
            $userFriend->invitee_id,
            $userFriend->inviter_id
        ]);
    }
}
