@extends('plantilla.usuario')
@section('titulo','Maestro - Usuarios')
@section('activacion')
@endsection
@section('estilos')  
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Relación de activos</li>
	<li class="">activos</li>
</ul>

@endsection
@section('contenido')
<div class="col-xs-12">
	<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>
		<div class="table-header">
      		<a href="#nuevo" class="stj-acciones stj-acciones-new" title="Nuevo" data-toggle="modal"><i class="fa fa-plus"></i></a>
			Registrar &nbsp;&nbsp;&nbsp;
		</div>
		<div class="table-responsive">
			<table id="dynamic-table" class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th class="center">codigo</th>
						<th class="center">Capa</th>
						<th class="center" class="hidden-480">Activo</th>
						<th class="center" class="hidden-480">Unidades</th>
						<th class="center" class="hidden-480">Costo Unitario</th>						
						<th class="center" class="hidden-480">Costo Total</th>
						<th class="center" class="hidden-480">Dependencia</th>
						<th class="center" class="hidden-480">Fecha</th>
						<th class="center" class="hidden-480">Nro de Factura</th>
						<th class="center" class="hidden-480">Proveedor</th>
					</tr>
				</thead>
				<tbody>
					@foreach($katy as $k)
					<tr>
						<td>{{$k->codigo}}</td>
						<td>{{$k->capa}}</td>
						<td>{{$k->activo}}</td>
						<td>ssss</td>
						<td>ssss</td>
						<td>ssss</td>
						<td>ssss</td>
						<td>ssss</td>
						<td>ssss</td>
						<td>ssss</td>
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
			       
                		
			    } )

</script>

@endsection