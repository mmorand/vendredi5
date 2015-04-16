<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('decks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->tinyInteger('game_slot')->default(0);
			$table->enum('type', array('pirate', 'danger', 'fight', 'oldness'));
			$table->tinyInteger('card_id');
			$table->tinyInteger('card_order');
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
		Schema::drop('decks');
	}

}
