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
				<td><a class="btn btn-primary" href="{{route('videojuego.editar', $videojuego)}}">Editar</a></td>
				<td><form action="{{ route('videojuego.destroy', $videojuego)}}" class="formulario-borrar" method='POST' >
					@csrf @method('DELETE')
					<button type="submit" class="btn btn-danger">Eliminar</button>
				</form></td>
			@endauth							
		</tr>
		
	</table>
	<a class="btn btn-primary" href="{{route('videojuego.index')}}">Regresar</a>
</div>
@endsection
@section('js')
	<script>
		$(".formulario-borrar").submit(function(event){
			event.preventDefault();

			// Swal.fire({
			//   title: '¿Estás seguro?',
			//   text: "No podrás deshacer la acción al confirmar",
			//   icon: 'warning',
			//   showCancelButton: true,
			//   confirmButtonColor: '#3085d6',
			//   cancelButtonColor: '#d33',
			//   confirmButtonText: 'Acepto, borrar'
			// }).then((result) => {
			//   if (result.isConfirmed) {
			//   	this.submit();
			//   }
			// });
		});

	</script>
@endsection