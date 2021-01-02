<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Models\Races\RaceInvite;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendInviteToRecipient implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     *
     * @var RaceInvite
     */
    public $raceInvite;

    public function __construct(RaceInvite $raceInvite)
    {
        $this->raceInvite = $raceInvite;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
