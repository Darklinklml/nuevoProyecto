@extends('layout')

@section('title', 'Videojuego '.$videojuego->videojuego_nombre)

@section('content')
<div class="container">
	<h1>Videojuego</h1>
	
	<table class="table table-bordered" name='tabla_videojuegos' id='tabla_videojuegos'>
		<tr>
			<td><label>Id</label></td>
			<td><label>Nombre Videojuego</label></td>
			<td><label>Categoria</label></td>
			<td><label>Consola</label></td>
			<td><label>Precio Adquisición</label></td>
			<td><label>Precio venta</label></td>
			@auth
				<td><label>Editar</label></td>
				<td><label>Borrar</label></td>
			@endauth
		</tr>
		<tr>
			<td>{{$videojuego->id}}</td>
			<td >{{$videojuego->videojuego_nombre}}</td>
			<td>{{$videojuego->videojuego_categoria}}</td>
			<td>{{$videojuego->videojuego_consola}}</td>
			<td>${{$videojuego->videojuego_precio_adquisicion}}</td>
			<td>${{$videojuego->videojuego_precio_venta}}</td>
			@auth
				<td><a href="{{route('videojuego.editar', $videojuego)}}">Editar</a></td>
				<td><form  method='POST' action="{{ route('videojuego.destroy', $videojuego)}}">
					@csrf @method('DELETE')
					<button class="btn btn-primary">Eliminar</button>
				</form></td>
			@endauth							
		</tr>
		
	</table>
</div>
@endsection