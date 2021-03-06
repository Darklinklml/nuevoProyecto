@extends('layout')

@section('content')
<div class="container">
	<h1>Registrar Videojuegos</h1>
	
	<form class="bg-white shadow rounded py-4 px-4" 
		method="POST" 
		enctype="multipart/form-data" 
		action="{{ route('videojuego.store')}}">
		@csrf
		
		@include('videojuegos._form')
		<button class="btn btn-primary text-white">Guardar</button>
		
	</form>

	@include('partials._validation-errors')
</div>
@endsection