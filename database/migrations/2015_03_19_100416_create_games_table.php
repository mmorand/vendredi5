<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendredi5_games', function(Blueprint $table) {
			$table->increments('id');
			$table->tinyInteger('game_slot')->default(0);
			$table->boolean('status')->default(0);
			$table->tinyInteger('phase')->default(0);
			$table->tinyInteger('lifepoints')->default(18);
			$table->tinyInteger('pirate_1');
			$table->tinyInteger('pirate_2');
			$table->string('oldness');
			$table->string('dangers');
			$table->string('fighting');
			$table->boolean('endgame')->default(0);
			$table->tinyInteger('points')->default(0);
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
		Schema::drop('vendredi5_games');
	}

}
