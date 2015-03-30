<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Games;
use App\Cards;

use Illuminate\Http\Request;
use DB;
use Input;
use Redirect;

class GameController extends Controller {

	var $id;
	var $phase;
	var $deck_oldness;
	var $deck_fighting;
	var $deck_dangers;
	var $pirate1;
	var $pirate2;
	var $lifepoints;

	/**
	 * Constructor to initiate every games
	 *
	 * @return Response
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Display the template for selecting the game
		$game = array();

		for ($i=1; $i < 4; $i++) { 
			//$game[$i] = DB::table('vendredi5_games')->where('game_slot', $i)->get();
			$game[$i] = Games::where('game_slot', $i)->get();
		}

		return view('selectGame')
			->with(array(
				'game' => $game,
			));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$game_slot = Input::get('game_slot');
		// Create a new game if slot is available
		$is_slot_available = DB::table('vendredi5_games')->where('game_slot', $game_slot)->get();

		if( empty($is_slot_available) ) {

			// Create a new game on the given slot
			// Le jeu commence à l'étape 1
			$this->phase = 1;

			// Mélanger les cartes vieillissement
			$oldness_cards_hard = DB::table('vendredi5_cards')->where(array('type' => 'oldness', 'lvl_2' => 1))->get();
			$oldness_cards_soft = DB::table('vendredi5_cards')->where(array('type' => 'oldness', 'lvl_2' => 0))->get();

			$deck_och = array();
			$deck_ocs = array();
			foreach ($oldness_cards_hard as $och) { array_push($deck_och, $och->id); }
			foreach ($oldness_cards_soft as $ocs) { array_push($deck_ocs, $ocs->id); }
			shuffle($deck_och);
			shuffle($deck_ocs);

			$deck_och = implode(', ', $deck_och);
			$deck_ocs = implode(', ', $deck_ocs);
			$this->deck_oldness = $deck_ocs . ', ' . $deck_och;

			// Mélanger les cartes combat
			$fighting_cards = DB::table('vendredi_cards')->where('type', 'fight')->get();
			$deck_fight = array();
			foreach ($fighting_cards as $fight) { array_push($deck_fight, $fight->id); }
			shuffle($deck_fight);

			$this->deck_fighting = implode(', ', $deck_fight);

			// Mélanger les cartes danger
			$danger_cards = DB::table('vendredi_cards')->where('type', 'danger')->get();
			$deck_danger = array();
			foreach ($danger_cards as $danger) { array_push($deck_danger, $danger->id); }
			shuffle($deck_danger);

			$this->deck_dangers = implode(', ', $deck_danger);

			// Mélanger et récupèrer deux pirates
			$pirates_cards = DB::table('vendredi_cards')->where('type', 'pirate')->get();
			$deck_pirates = array();
			foreach ($pirates_cards as $pirate) { array_push($deck_pirates, $pirate->id); }
			shuffle($deck_pirates);

			$this->pirate1 = $deck_pirates[0];
			$this->pirate2 = $deck_pirates[1];

			// Le joueur commence avec 20pts de vie
			$this->lifepoints = 20;

			// Injection de la partie dans la Base de données
			DB::table('vendredi_games')->insert(array(
				'status' 		=> 1,
				'phase' 		=> $this->phase,
				'lifepoints' 	=> $this->lifepoints,
				'pirate_1' 		=> $this->pirate1,
				'pirate_2' 		=> $this->pirate2,
				'oldness' 		=> $this->deck_oldness,
				'dangers' 		=> $this->deck_dangers,
				'fighting' 		=> $this->deck_fighting,
				'endgame' 		=> 0,
				'points' 		=> 0
			));

			// Renvoie sur la page de jeu
			return Redirect::to('game.show')->with('id', $game_slot);

		} else {
			Session::flash('message', 'Sorry, this slot is unavailable. A game is in progress.');
			return Redirect::to('game.select');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Display current game forgiven id
		return view('game')->with('id', $id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		return view('game')->with('id', $id);
	}

}
