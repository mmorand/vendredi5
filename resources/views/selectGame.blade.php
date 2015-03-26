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

			@if (!empty($game_1))
				<div class="game-play">
					{!! Form::open(array('route' => array('game.show', $game_1->id))) !!}
						{!! Form::submit('Play', array('class' => 'btn btn-success')) !!}
					{!! Form::close() !!}
				</div>
				<div class="game-delete">
					{!! Form::open(array('route' => array('game.destroy', $game_1->id), 'method' => 'DELETE') ) !!}
						{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
					{!! Form::close() !!}
				</div>
			@else
				<div class="game-create">
					{!! Form::open(array('route' => array('game.create', 1))) !!}
						{!! Form::submit('New Game', array('class' => 'btn btn-success')) !!}
					{!! Form::close() !!}
				</div>
			@endif

		</div>
		<div class="col-sm-4">
			<div class="game-title">
				Jeu 2
			</div>

			@if (!empty($game_2))
				<div class="game-play">
					{!! Form::open(array('route' => array('game.show', $game_2->id))) !!}
						{!! Form::submit('Play', array('class' => 'btn btn-success')) !!}
					{!! Form::close() !!}
				</div>
				<div class="game-delete">
					{!! Form::open(array('route' => array('game.destroy', $game_2->id), 'method' => 'DELETE') ) !!}
						{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
					{!! Form::close() !!}
				</div>
			@else
				<div class="game-create">
					{!! Form::open(array('route' => array('game.create', 2))) !!}
						{!! Form::submit('New Game', array('class' => 'btn btn-success')) !!}
					{!! Form::close() !!}
				</div>
			@endif

		</div>
		<div class="col-sm-4">
			<div class="game-title">
				Jeu 3
			</div>

			@if (!empty($game_3))
				<div class="game-play">
					{!! Form::open(array('route' => array('game.show', $game_3->id))) !!}
						{!! Form::submit('Play', array('class' => 'btn btn-success')) !!}
					{!! Form::close() !!}
				</div>
				<div class="game-delete">
					{!! Form::open(array('route' => array('game.destroy', $game_3->id), 'method' => 'DELETE') ) !!}
						{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
					{!! Form::close() !!}
				</div>
			@else
				<div class="game-create">
					{!! Form::open(array('route' => array('game.create', 3))) !!}
						{!! Form::submit('New Game', array('class' => 'btn btn-success')) !!}
					{!! Form::close() !!}
				</div>
			@endif

		</div>
	</div>
@stop
