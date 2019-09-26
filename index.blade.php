@extends('layouts.master')

<br />
	<center>	
		<h2>All Of Your Todos</h2>
	</center>
<hr />

<br />

<div>
	@foreach ($data as $todo)
		<center>
			<h4>{{ $todo->id }} - {{ $todo->todo }} 
				<a href="{{ route('remove', [$todo->id]) }}"
				class="btn btn-danger btn-sm">X</a>
				<a href="{{ route('update', [$todo->id]) }}"
					class="btn btn-info btn-sm">Update</a>
					@if ( $todo->is_completed )
					<a href="#" class="btn disabled btn-sm" disabled>
					Completed</a>
					@else
					<a href="{{ route('complete', [$todo->id]) }}" class="btn btn-info btn-sm">Mark As Completed</a>
					@endif()
			</h4>
			<br /><hr />
		</center>
	@endforeach()
</div>