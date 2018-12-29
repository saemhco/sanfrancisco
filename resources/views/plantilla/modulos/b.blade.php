@if(auth()->user()->hasRoles(['Administrador General','Soporte','Usuario']))
	<li class="">
		<a href="#">
			<i class="menu-icon fa fa-users"></i>
			<span class="menu-text"> Estado de la Máquina </span>
		</a>
		<b class="arrow"></b>
	</li>
@endif