@extends('template')

@section('title')
	Select Game - Vendredi - Laravel 5
@stop

@section('content')

	<div class="row">

		@for ($i = 1; $i < 4; $i++)
			<div class="col-sm-4">
				<div class="game-title">
					Jeu {{ $i }}
				</div>

				@unless (empty($game[$i]))
					<div class="game-play">
						{!! Form::open(array('route' => array('game.show', $game[$i]->id))) !!}
							{!! Form::hidden('game_slot', $game[$i]->id) !!}
							{!! Form::submit('Play', array('class' => 'btn btn-success')) !!}
						{!! Form::close() !!}
					</div>
					<div class="game-delete">
						{!! Form::open(array('route' => array('game.destroy', $game[$i]->id), 'method' => 'DELETE') ) !!}
							{!! Form::hidden('game_slot', $game[$i]->id) !!}
							{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
						{!! Form::close() !!}
					</div>
				@else
					<div class="game-create">
						{!! Form::open(array('route' => array('game.create'))) !!}
							{!! Form::hidden('game_slot', $i) !!}
							{!! Form::submit('New Game', array('class' => 'btn btn-success')) !!}
						{!! Form::close() !!}
					</div>
				@endif

			</div>
		@endfor

	</div>
@stop
