<?php namespace App\Http\Controllers;

class VendrediController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

	/**
	 * Show the page for selecting which slot you wanna play (1, 2 or 3)
	 *
	 * @return Response
	 */
	public function selectGame()
	{
		$game = new GameController();
		$game->id = 1;
		return view('selectGame')->with('game', $game);
	}
}
