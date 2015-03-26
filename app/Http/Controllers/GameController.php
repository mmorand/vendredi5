<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class GameController extends Controller {

	var $id;

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
		$game_1 = DB::table('vendredi5_games')->where('game_slot', 1)->get();
		$game_2 = DB::table('vendredi5_games')->where('game_slot', 2)->get();
		$game_3 = DB::table('vendredi5_games')->where('game_slot', 3)->get();

		return view('selectGame')
			->with(array(
				'game_1' => $game_1,
				'game_2' => $game_2,
				'game_3' => $game_3,
			));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
		//
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
