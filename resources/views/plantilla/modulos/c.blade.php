@if(auth()->user()->hasRoles(['Usuario']))
	<li class="">
		<a href="#">
			<i class="menu-icon fa fa-users"></i>
			<span class="menu-text"> Agenda usuario </span>
		</a>
		<b class="arrow"></b>
	</li>
@endif