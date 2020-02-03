<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->timestamp('date_of_birth');
            $table->string('nationality');
            $table->boolean('eu_passport');
            $table->string('marital_status')->nullable();
            $table->integer('height');
            $table->integer('weight');
            $table->string('preferred_position')->nullable();
            $table->json('positions')->nullable();
            $table->string('current_club')->nullable();
            $table->string('club_league')->nullable();
            $table->string('league_level')->nullable();
            $table->timestamp('contract_expiration')->nullable();
            $table->string('registration_type')->nullable();
            $table->string('foot')->nullable();
            $table->longText('profile')->nullable();
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
        Schema::dropIfExists('players');
    }
}
