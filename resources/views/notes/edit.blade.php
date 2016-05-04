@extends('layouts.master')

@section('content')
	<h1>Edit note</h1>

	<form action="/notes/{{ $note->id }}" method="POST">
		{{ method_field('PATCH') }}

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="note">Note</label>
			<div>
				<textarea class="form-control" name="body" id="note">{{ $note->body }}</textarea>
			</div>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update Notes</button>
		</div>
	</form>

@stop