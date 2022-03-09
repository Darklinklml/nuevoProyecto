
<div class="custom-file">
			<label class="custom-file-label" for="customFile">Elige una imagen</label>
			<input type="file" name="imagen" class="custom-file-input" id="customFile">
			
</div>
<div class="form-group">

	<label for='nombre'>
		Nombre del Videojuego:
	</label><br>

	<input class="form-control bg-light @error('videojuego_nombre') is-valid @enderror shadow-sm "
		name="videojuego_nombre"
	 	id="nombre" 
	 	placeholder="Nombre del Videojuego"
	  	value="{{old('nombre',$videojuego->videojuego_nombre)}}" required><br>
	  	@error('videojuego_nombre')
	  		<span class="invalid-feedback" role="alert">
	  			<strong>{{$message}}</strong>
	  		</span>
	  	@enderror
</div>	
<div class="form-group">	
	<label for='videojuego_clasificacion'>Clasificación:</label><br>
	<select class="custom-select @error('clasificacion') is-valid @enderror" name='videojuego_clasificacion' id='clasificacion'>
		<option value='A'>A</option>
		<option value='B'>B</option>
		<option value='B15'>B15</option>
		<option value='C'>C</option>
		<option value='D'>D</option>
	</select><br>
	@error('videojuego_clasificacion')
	  		<span class="invalid-feedback" role="alert">
	  			<strong>{{$message}}</strong>
	  		</span>
	@enderror
</div>  
<div class="form-group">	
	<label >Consola:</label><br>
	<input class="form-control bg-light @error('consola') is-valid @enderror shadow-sm " 
	name="videojuego_consola" 
	placeholder="consola" 
	value="{{old('consola',$videojuego->videojuego_consola)}}" required><br>
	@error('videojuego_consola')
	  		<span class="invalid-feedback" role="alert">
	  			<strong>{{$message}}</strong>
	  		</span>
	@enderror
</div>
<div class="form-group">	
	<label>Precio Adquisición:</label><br>
	<label>$</label>
	<input class="form-control bg-light @error('videojuego_precio_adquisicion') is-valid @enderror shadow-sm "  type="number" name="videojuego_precio_adquisicion" id="precio" min="0" value="{{old('precio_adquisicion',$videojuego->videojuego_precio_adquisicion)}}" required><br>
	@error('videojuego_precio_adquisicion')
	  		<span class="invalid-feedback" role="alert">
	  			<strong>{{$message}}</strong>
	  		</span>
	@enderror
</div> 