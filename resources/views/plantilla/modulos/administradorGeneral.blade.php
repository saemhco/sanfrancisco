@if(auth()->user()->hasRoles(['Administrador General']))
	<li class="">
		<a href="{{ route('usuario.nue.index') }}">
			<i class="menu-icon fa fa-users"></i>
			<span class="menu-text"> Usuarios </span>
		</a>
		<b class="arrow"></b>
	</li>
	<li class="">
		<a href="#">
			<i class="menu-icon fa fa-home"></i>
			<span class="menu-text"> Oficinas </span>
		</a>
		<b class="arrow"></b>
	</li>
@endif