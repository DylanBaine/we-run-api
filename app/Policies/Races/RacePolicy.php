<?php

namespace App\Policies\Races;

use App\Models\Races\Race;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RacePolicy
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
     * @param  \App\Models\Races\Race  $race
     * @return mixed
     */
    public function view(User $user, Race $race)
    {
        return $race->created_by_id === $user->id;
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
     * @param  \App\Models\Races\Race  $race
     * @return mixed
     */
    public function update(User $user, Race $race)
    {
        return $race->created_by_id == $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Races\Race  $race
     * @return mixed
     */
    public function delete(User $user, Race $race)
    {
        return $race->created_by_id == $user->id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Races\Race  $race
     * @return mixed
     */
    public function restore(User $user, Race $race)
    {
        return $race->created_by_id == $user->id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Races\Race  $race
     * @return mixed
     */
    public function forceDelete(User $user, Race $race)
    {
        return $race->created_by_id == $user->id;
    }
}
