<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_invites', function (Blueprint $table) {
            $table->id();
            $table->integer('race_id')->index();
            $table->integer('inviter_id')->index();
            $table->string('code')->index();
            $table->string('contact_method_value');
            $table->string('contact_method_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('race_invites');
    }
}
