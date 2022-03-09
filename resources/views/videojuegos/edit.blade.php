@extends('layout')

@section('content')
<div class="container">
	<h1>Editar Videojuegos</h1>
	<form class="bg-white shadow rounded py-4 px-4" 
		method="POST"
		enctype="multipart/form-data" 
		action="{{ route('videojuego.update', $videojuego)}}">
		@csrf @method('PATCH')

		@include('videojuegos._form')
		<div class="form-group">
			<label for="precio_venta">Precio venta:</label><br>
			<input class="form-control bg-light @error('precio_venta') is-valid @enderror shadow-sm "type="number" name="videojuego_precio_venta" id="precio_venta" min="0" value="{{$videojuego->videojuego_precio_venta}}" required><br>
			@error('precio_venta')
	  		<span class="invalid-feedback" role="alert">
	  			<strong>{{$message}}</strong>
	  		</span>
	@enderror
		<button class="btn btn-primary text-white">Guardar Cambios</button>
	</form>

	@include('partials._validation-errors')
</div>
@endsection