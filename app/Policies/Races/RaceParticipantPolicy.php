<?php

namespace App\Policies\Races;

use App\Models\Races\RaceParticipant;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RaceParticipantPolicy
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
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Races\RaceParticipant  $raceParticipant
     * @return mixed
     */
    public function view(User $user, RaceParticipant $raceParticipant)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Races\RaceParticipant  $raceParticipant
     * @return mixed
     */
    public function update(User $user, RaceParticipant $raceParticipant)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Races\RaceParticipant  $raceParticipant
     * @return mixed
     */
    public function delete(User $user, RaceParticipant $raceParticipant)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Races\RaceParticipant  $raceParticipant
     * @return mixed
     */
    public function restore(User $user, RaceParticipant $raceParticipant)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Races\RaceParticipant  $raceParticipant
     * @return mixed
     */
    public function forceDelete(User $user, RaceParticipant $raceParticipant)
    {
        //
    }
}
