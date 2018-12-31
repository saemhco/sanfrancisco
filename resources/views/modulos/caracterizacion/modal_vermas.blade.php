<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<label><b>Código: </b>{{ $activo->codigo }}</label><br>
				<label><b>N°: </b>{{ $activo->n }}</label><br>
				<label><b>Activo: </b>{{ $activo->nombre }}</label><br>
				<label><b>Categoría: </b>{{ $activo->capa->categoria }}</label>
			</div>
			
			<div class="modal-body" align="center"><br>
				<table  border="2" width="100%" id="dynamic-table" class="table table-striped table-bordered table-hover table-condensed">
				  <thead >
				    <tr  align="center" valign="middle">
				      <th rowspan="2"  class="center">N°</th>
				      <th rowspan="2"  class="center">Código</th>
				      <th rowspan="2"  class="center">Activo</th>
				      <th rowspan="2"  class="center">Probabilidad</th>
				      <th colspan="5"  class="center">Dimenciones</th>
				    </tr>
				    <tr>
				    	<th  class="center">[D]</th>
				    	<th  class="center">[I]</th>
				    	<th  class="center">[C]</th>
				    	<th  class="center">[A]</th>
				    	<th  class="center">[N_R]</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<tr class="center" style="background-color: yellow; ">
				      <td><b>{{ $activo->n }}</b></td>
				      <td><b>{{ $activo->codigo }}</b></td>
				      <td><b>{{ $activo->nombre }}</b></td>
				      <td><b>{{ $promedio["probabilidad"] }}</b></td>
				      <td><b>{{ $promedio["D"].'%' }}</b></td>
				      <td><b>{{ $promedio["I"].'%' }}</b></td>
				      <td><b>{{ $promedio["C"].'%' }}</b></td>
				      <td><b>{{ $promedio["A"].'%' }}</b></td>
				      <td><b>{{ $promedio["NR"].'%' }}</b></td>
				      
				    </tr>
				   
				  	@foreach ($caracterizacion as $c)
				    <tr class="center">
				      <td></td>
				      <td>{{ $c->amenaza->codigo }}</td>
				      <td>{{ $c->amenaza->nombre}}</td>
				      <td>{{ $c->probabilidad}}</td>
				      <td>{{ $c->dimension_D*100}}%</td>
				      <td>{{ $c->dimension_I*100}}%</td>
				      <td>{{ $c->dimension_C*100}}%</td>
				      <td>{{ $c->dimension_A*100}}%</td>
				      <td>{{ $c->dimension_NR*100}}%</td>
				      
				    </tr>
				  	@endforeach
				  </tbody>
				</table>

			</div>
			{{-- <div class="modal-footer">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
			</div> --}}
			
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->