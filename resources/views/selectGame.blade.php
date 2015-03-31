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

				@if ( !$games[$i]->isEmpty() )

					@foreach ( $games[$i] as $game )

						<div class="game-play">
								{!! HTML::linkRoute('game.show', 'Play', array($game->game_slot), array('class' => 'btn btn-info')) !!}
						</div>
						<div class="game-delete">
								{!! Form::open(array('route' => array('game.destroy', $game->game_slot), 'method' => 'DELETE') ) !!}
									{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
								{!! Form::close() !!}
						</div>

					@endforeach

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
