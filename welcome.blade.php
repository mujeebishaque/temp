@extends('layouts.master')
<div class="content">
    <div class="title m-b-md">
        <br /><br />
        Welcome To TodosApp
    </div>
</div>

@section('content')
<center>
    <a href="/index">
        <button class="btn btn-sm btn-primary">
        Visit My Todos
        </button>
    </a>
    <a href="/create">
        <button class="btn btn-sm btn-info">
        Add New Todo</button>                        
    </a>

</center>
@endsection()