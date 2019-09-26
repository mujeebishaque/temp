@extends('layouts.master')

	<a href="{{ route('index') }}">
		<button class="btn btn-danger btn-sm">
		Go Back</button>
	</a>

<center>
	<br>
	Update todo : <br /> <h2>{{ $todo->todo }}</h2><hr /><br />
	<h2>TO</h2> <hr />
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<form method="post" action="{{route('save', [$todo->id, $todo->updated_todo])}}">
				{{ csrf_field() }}
			<input type="text" name="updated_todo" value="{{ $todo->todo }}" class="form-control">
			<br /><br />
			<input type="submit" name="submit" value="Update Todo" class="btn btn-success btn-sm">
			</form>		
			</div>
		</div>
	</div>
	
</center>