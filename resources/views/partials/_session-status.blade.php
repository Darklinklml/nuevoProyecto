@if(session('eliminar') == 'completado')
	<script>
		Swal.fire(
	      'Eliminado',
	      'El videojuego ha sido eliminado exitosamente.',
	      'success'
	    );
	</script>
@endif
@if(session('registrar') == 'completado')
	<script>
		Swal.fire(
	      'Registrado',
	      'El videojuego ha sido registrado exitosamente.',
	      'success'
	    );
	</script>
@endif
@if(session('editar') == 'completado')
	<script>
		Swal.fire(
	      'Modificado',
	      'El videojuego ha sido modificado exitosamente.',
	      'success'
	    );
	</script>
@endif