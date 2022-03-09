@extends('layout')

@section('content')
<div class="container">
	<h1>Registrar Videojuegos</h1>
	
	<form class="bg-white shadow rounded py-4 px-4" 
		method="POST" 
		enctype="multipart/form-data" 
		action="{{ route('videojuego.store')}}">
		@csrf
		<div class="custom-file">
			<label class="custom-file-label" for="customFile">Elige una imagen</label>
			<input type="file" name="imagen" class="custom-file-input" id="customFile">
			
		</div>
		@include('videojuegos._form')
		<button class="btn btn-primary">Guardar</button>
		
	</form>

	@include('partials._validation-errors')
</div>
@endsection