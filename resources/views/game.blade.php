@extends('template')

@section('title')
	Vendredi - Laravel 5
@stop

@section('content')

	{!! HTML::image('img/cards/'.$pirate1->card_image, 'pirate 1', array('class' => 'horizontal-card inactive', 'id' => 'pirate-1')) !!}
	<div class="quote">Bienvenue sur la version Laravel du jeu Vendredi de Friedmann Friese</div>
	{!!HTML::linkAction('GameController@index', 'New game', array(), array('class' => 'btn btn-success'))!!}

@stop
