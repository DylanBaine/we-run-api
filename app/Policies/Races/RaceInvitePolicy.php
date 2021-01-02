<?php

namespace App\Policies\Races;

use App\Models\Races\RaceInvite;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RaceInvitePolicy
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
     * @param  \App\Models\Races\RaceInvite  $raceInvite
     * @return mixed
     */
    public function view(?User $user, RaceInvite $raceInvite)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Races\RaceInvite  $raceInvite
     * @return mixed
     */
    public function update(User $user, RaceInvite $raceInvite)
    {
        return $user->id == $raceInvite->inviter_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Races\RaceInvite  $raceInvite
     * @return mixed
     */
    public function delete(User $user, RaceInvite $raceInvite)
    {
        return $user->id == $raceInvite->inviter_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Races\RaceInvite  $raceInvite
     * @return mixed
     */
    public function restore(User $user, RaceInvite $raceInvite)
    {
        return $user->id == $raceInvite->inviter_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Races\RaceInvite  $raceInvite
     * @return mixed
     */
    public function forceDelete(User $user, RaceInvite $raceInvite)
    {
        return $user->id == $raceInvite->inviter_id;
    }
}
