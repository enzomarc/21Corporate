<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('careers', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('player');
			$table->string('period');
			$table->string('club');
			$table->boolean('current_club');
			$table->string('country');
			$table->integer('matches');
			$table->integer('goals');
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
		Schema::dropIfExists('careers');
	}
}
