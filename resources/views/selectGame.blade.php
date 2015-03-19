@extends('template')

@section('title')
	Select Game - Vendredi - Laravel 5
@stop

@section('content')
	<div class="row">
		<div class="col-sm-4">
			<div class="game-title">
				Jeu 1
			</div>
			<div class="game-play">
				{!! Form::open(array('route' => array('game.index', $game->id))) !!}
					{!! Form::submit('Play', array('class' => 'btn btn-success')) !!}
				{!! Form::close() !!}
			</div>
			<div class="game-delete">
				{!! Form::open(array('route' => array('game.destroy', $game->id), 'method' => 'DELETE') ) !!}
					{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
				{!! Form::close() !!}
			</div>
		</div>
		<div class="col-sm-4">
			<div class="game-title">
				Jeu 2
			</div>
			<div class="game-play">
				{!! Form::open(array('route' => array('game.index', $game->id))) !!}
					{!! Form::submit('Play', array('class' => 'btn btn-success')) !!}
				{!! Form::close() !!}
			</div>
			<div class="game-delete">
				{!! Form::open(array('route' => array('game.destroy', $game->id), 'method' => 'DELETE') ) !!}
					{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
				{!! Form::close() !!}
			</div>
		</div>
		<div class="col-sm-4">
			<div class="game-title">
				Jeu 3
			</div>
			<div class="game-play">
				{!! Form::open(array('route' => array('game.index', $game->id))) !!}
					{!! Form::submit('Play', array('class' => 'btn btn-success')) !!}
				{!! Form::close() !!}
			</div>
			<div class="game-delete">
				{!! Form::open(array('route' => array('game.destroy', $game->id), 'method' => 'DELETE') ) !!}
					{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop
