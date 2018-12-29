@if(Auth::user()->hasRoles(['Soporte','Usuario']))
						<li class="">
							<a href="#" class="dropdown-toggle" title="Responsabilidad Social Universitaria">
								<i class="menu-icon fa fa-leaf" ></i>
								<span class="menu-text"> Activos </span>
								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								@if(Auth::user()->hasRoles(['Soporte']))
								<li class="">
									<a href="#">
										<i class="menu-icon fa fa-caret-right"></i>
										Activos de Soporte Técnico
									</a>
									<b class="arrow"></b>
								</li>
								@endif
								@if(Auth::user()->hasRoles(['Usuario']))
								<li class="">
									<a href="#">
										<i class="menu-icon fa fa-caret-right"></i>
										Activos del Usuario
									</a>
									<b class="arrow"></b>
								</li>
								@endif
								<li class="">
									<a href="#">
										<i class="menu-icon fa fa-caret-right"></i>
										Otros activos
									</a>
									<b class="arrow"></b>
								</li>
							</ul>
						</li>
@endif