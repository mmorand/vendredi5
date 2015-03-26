@extends('template')

@section('title')
	Vendredi - Laravel 5
@stop

@section('content')
	<div class="title">Laravel 5</div>
	<div class="quote">Bienvenue sur la version Laravel du jeu Vendredi de Friedmann Friese</div>
	{!! HTML::linkAction('GameController@index', 'New game', array(), array('class' => 'btn btn-success')) !!}
@stop
