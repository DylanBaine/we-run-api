<?php

namespace App\Providers;

use App\Models\Races\Race;
use App\Models\Races\RaceInvite;
use App\Models\Races\RaceParticipant;
use App\Policies\Races\RaceInvitePolicy;
use App\Policies\Races\RaceParticipantPolicy;
use App\Policies\Races\RacePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Race::class => RacePolicy::class,
        RaceParticipant::class => RaceParticipantPolicy::class,
        RaceInvite::class => RaceInvitePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
