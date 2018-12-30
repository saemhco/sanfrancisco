@extends('plantilla.usuario')
@section('titulo','Activos - Identificación')
@section('activacion')
@endsection
@section('estilos')  
	<style type="text/css">
		.acciones{
			font-size: 15px;
			padding: 5px;
			border-radius: 50%;
			transition: 0.5;
		}
		.acciones:hover{
			background-color: blue;
			color: white;
		}
	</style>
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Relación de activos</li>
	<li class="">activos</li>
	<li class="">identificación</li>
</ul>

@endsection
@section('contenido')
<div class="col-xs-12">
	<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>

		<div class="table-header">
			<button class="btn btn-xs btn-success"><i class="fa fa-plus"></i> Nuevo Activo</button>
			
		</div>
		<div class="table-responsive">
			<table id="dynamic-table" class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th class="center" class="hidden-480">Categoría</th>
						<th class="center">Capa</th>
						<th class="center">codigo</th>
						<th class="center" class="hidden-480">Activo</th>
						<th class="center" class="hidden-480">UN</th>
						<th class="center" class="hidden-480" title='Costo Unitario'>CU (S/)</th>						
						<th class="center" class="hidden-480" title='Costo Total'>CT (S/)</th>
						<th class="center" class="hidden-480" title="Disponibilidad">[D]</th>
						<th class="center" class="hidden-480" title="Integridad">[I]</th>
						<th class="center" class="hidden-480" title="Confidencialidad">[C]</th>
						<th class="center" class="hidden-480" title="Autenticidad">[A]</th>
						<th class="center" class="hidden-480" title="No repudio">[N_R]</th>
						<th class="center" class="hidden-480" title="No repudio">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($activos as $k)
					<tr align="center">
						<td>{{$k->capa->categoria}}</td>
						<td>{{$k->capa->capa}}</td>
						<td>{{$k->codigo}}</td>
						<td>{{$k->nombre}}</td>
						<td>{{$k->unidad}}</td>
						<td>{{$k->costo_unitario}}</td>
						<td>{{$k->costo_unitario*$k->unidad}}</td>
						<td>{{$k->dimension_D}}</td>
						<td>{{$k->dimension_I}}</td>
						<td>{{$k->dimension_C}}</td>
						<td>{{$k->dimension_A}}</td>
						<td>{{$k->dimension_NR}}</td>
						<td>
							<a href="{{ route('act.reg.edit') }}"" title="editar"><i class="ace-icon fa fa-edit acciones"></i></a>
							<a href="#" title="Eliminar"><i class="ace-icon fa fa-trash acciones"></i></a>
						</td>
					</tr>
					@endforeach
					
				</tbody>			
			</table>
		</div>
</div>

@endsection
@section('script')
		<!-- page specific plugin scripts -->
		{!!Html::script('/plantilla/js/jquery.dataTables.min.js')!!}
		{!!Html::script('/plantilla/js/jquery.dataTables.bootstrap.min.js')!!}
		{!!Html::script('/plantilla/js/dataTables.buttons.min.js')!!}
		{!!Html::script('/plantilla/js/buttons.flash.min.js')!!}
		{!!Html::script('/plantilla/js/buttons.html5.min.js')!!}
		{!!Html::script('/plantilla/js/buttons.print.min.js')!!}
		{!!Html::script('/plantilla/js/buttons.colVis.min.js')!!}
		{!!Html::script('/plantilla/js/dataTables.select.min.js')!!}
		{!!Html::script('/sweetalert/sweetalert2.all.js')!!}
		{!!Html::script('/sweetalert/core.js')!!}
<script type="text/javascript">
	var myTable=$('#dynamic-table').DataTable( {     
		"language":{"url":'{!! asset('/plantilla/js/latino.json') !!}'},
	});
	$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copiar al Portapapeles</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-download bigger-110 green' title='descargar'></i> <span class='hidden'>Exportar a CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Imprimir</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'Reporte'
					  }
					]
				} );
	myTable.buttons().container().appendTo( $('.tableTools-container') );


</script>

@endsection