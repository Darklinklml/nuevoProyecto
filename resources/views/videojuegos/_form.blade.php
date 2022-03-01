<div class="form-group">

	<label for='nombre'>
		Nombre del Videojuego:
	</label><br>

	<input class="form-control bg-light @error('name') is-valid @enderror shadow-sm "
		name="nombre"
	 	id="nombre" 
	 	placeholder="Nombre del Videojuego"
	  	value="{{old('nombre',$videojuego->videojuego_nombre)}}" required><br>
	  	@error('name')
	  		<span class="invalid-feedback" role="alert">
	  			<strong>{{$message}}</strong>
	  		</span>
	  	@enderror
</div>	
<div class="form-group">	
	<label for='clasificacion'>Clasificación:</label><br>
	<select class="custom-select @error('clasificacion') is-valid @enderror" name='clasificacion' id='clasificacion'>
		<option value='A'>A</option>
		<option value='B'>B</option>
		<option value='B15'>B15</option>
		<option value='C'>C</option>
		<option value='D'>D</option>
	</select><br>
	@error('clasificacion')
	  		<span class="invalid-feedback" role="alert">
	  			<strong>{{$message}}</strong>
	  		</span>
	@enderror
</div>  
<div class="form-group">	
	<label >Consola:</label><br>
	<input class="form-control bg-light @error('consola') is-valid @enderror shadow-sm " 
	name="consola" 
	placeholder="consola" 
	value="{{old('consola',$videojuego->videojuego_consola)}}" required><br>
	@error('consola')
	  		<span class="invalid-feedback" role="alert">
	  			<strong>{{$message}}</strong>
	  		</span>
	@enderror
</div>
<div class="form-group">	
	<label>Precio Adquisición:</label><br>
	<label>$</label>
	<input class="form-control bg-light @error('precio_adquisicion') is-valid @enderror shadow-sm "  type="number" name="precio_adquisicion" id="precio" min="0" value="{{old('precio_adquisicion',$videojuego->videojuego_precio_adquisicion)}}" required><br>
	@error('precio_adquisicion')
	  		<span class="invalid-feedback" role="alert">
	  			<strong>{{$message}}</strong>
	  		</span>
	@enderror
</div> 