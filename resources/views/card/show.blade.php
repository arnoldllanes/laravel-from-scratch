@extends('layouts.master')

@section('content')
<div class="row">
	<h1>Card Notes for id: {{ $card->id }}</h1>

	@foreach($card->notes as $note)
		<ul class="list-group">
			<li class="list-group-item">{{ $note->body }}
			<a href="" style="float:right">{{ $note->user->name }}</a>
			</li>

		</ul>
	@endforeach

	<hr>
	<h1>Add a New Note</h1>
	
	<form action="/cards/{{ $card->id }}/notes" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="note">Note</label>
			<div>
				<textarea class="form-control" name="body" id="note"></textarea>
			</div>

			<button type="submit" class="btn btn-success">Add Note</button>
		</div>
	</form>
</div>
@stop
