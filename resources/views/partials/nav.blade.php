<nav class="navbar bg-white shadow-sm">
	<a class="navbar-brand"  href="{{route('home')}}">
		{{config('app.name')}}
	</a>

		<ul class="nav nav-pills">
			<li class="nav-item">
				<a class="nav-link {{ setActive('home') }}"href="{{ route('home') }}">
					Inicio
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('videojuego.create') }}" href="{{ route('videojuego.create') }}">	Registrar videojuegos
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('videojuego.index') }}" href="{{ route('videojuego.index') }}">
					Lista de videojuegos
				</a>
			</li>
			@auth
			   <li class="nav-item">
				   	<a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
				   		Cerrar Sesión
				   	</a>
			   </li>

			@else
				<li class="nav-item">
					<a class="nav-link {{ setActive('login') }}" href="{{route('login')}}">
						Login
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('register') }}" href="{{route('register')}}">
						Register
					</a>
				</li>
			@endauth
			
		</ul>

</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>