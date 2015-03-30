<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model {

	protected $table = "vendredi5_games";
	protected $fillable = array(
		'status',
		'game_slot',
		'phase',
		'lifepoints',
		'pirate_1',
		'pirate_2',
		'oldness',
		'dangers',
		'fighting',
		'endgame',
		'points'
	);

}
