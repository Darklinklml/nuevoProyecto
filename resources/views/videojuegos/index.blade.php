@extends('layout')

@section('content')
<div class="container">
	<h1>Lista de Videojuegos</h1>
	
	<table class="table table-bordered" name='tabla_videojuegos' id='tabla_videojuegos'>
		<tr>
			<td><label>Id</label></td>
			<td><label>Portada</label></td>
			<td><label>Nombre Videojuego</label></td>
			<td><label>Categoria</label></td>
			<td><label>Consola</label></td>
			<td><label>Precio Adquisición</label></td>
			<td><label>Precio venta</label></td>
			<td><label>Ver videojuego</label></td>
		</tr>
		@forelse($catalogo as $videojuegoItem)
			<tr>
				<td>{{$videojuegoItem->id}}</td>
				@if($videojuegoItem->imagen)
				<td><div align="center"><img src="/storage/{{$videojuegoItem->imagen}}" width="100px" height="100px"></td></div>@endif
				<td >{{$videojuegoItem->videojuego_nombre}}</td>
				<td>{{$videojuegoItem->videojuego_clasificacion}}</td>
				<td>{{$videojuegoItem->videojuego_consola}}</td>
				<td>${{$videojuegoItem->videojuego_precio_adquisicion}}</td>
				<td>${{$videojuegoItem->videojuego_precio_venta}}</td>
				<td><a class="btn btn-primary text-white" href="{{route('videojuego.show', $videojuegoItem)}}">Ver</a></td>							
			</tr>
		@empty
			<label>No se encontraron registros en la base de datos.</label>
		@endforelse
	</table>
	<a class="btn btn-primary text-white" href="{{route('videojuego.create')}}">Registrar videojuego</a>
</div>
@endsection

