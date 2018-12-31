@extends('plantilla.usuario')
@section('titulo','Caracterización')
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
	<li class="active">Caracterización</li>
</ul>

@endsection
@section('contenido')
<?php 
function promedio($id){
	$caracterizacion=App\Caracterizacion::where('activo_id',$id)->get();
	if($caracterizacion){
		$cont=0; $probabilidad=0;$D=0;$I=0;$C=0;$A=0;$NR=0;
		foreach ($caracterizacion as $i) {
			$cont++;
			$probabilidad=$probabilidad+$i->probabilidad;
			$D=$D+$i->dimension_D;
			$I=$I+$i->dimension_I;
			$C=$C+$i->dimension_C;
			$A=$A+$i->dimension_A;
			$NR=$NR+$i->dimension_NR;
		}if($cont==0){$cont++;}
		$probabilidad=round($probabilidad/$cont);
		$D=round(100*$D/$cont);
		$I=round(100*$I/$cont);
		$C=round(100*$C/$cont);
		$A=round(100*$A/$cont);
		$NR=round(100*$NR/$cont);
		$msj= array('probabilidad' =>$probabilidad,'D' =>$D,'I' =>$I,'A' =>$A,'NR' =>$NR,'C' =>$C);
	}else{
		$msj=0;
	}
	return $msj;
}
?>
<div class="col-xs-12">
	<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>

		<div class="table-header">
			<a href="{{ route('act.reg.new') }}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> Nuevo </a>
			
		</div>
		<div class="table-responsive">
<table  border="2" width="100%" id="dynamic-table" class="table table-striped table-bordered table-hover table-condensed">
  <thead >
    <tr  align="center" valign="middle">
      <th rowspan="2"  class="center">Categoría</th>
      <th rowspan="2"  class="center">N°</th>
      <th rowspan="2"  class="center">Código</th>
      <th rowspan="2"  class="center">Activo</th>
      <th rowspan="2"  class="center">Probabilidad</th>
      <th colspan="5"  class="center">Dimenciones</th>
      <th rowspan="2"  class="center">Acciones</th>
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
  	@foreach ($activos as $c)
    <tr class="center">
      <td>{{ $c->capa->categoria }}</td>
      <td>{{ $c->n}}</td>
      <td>{{ $c->codigo}}</td>
      <td>{{ $c->nombre}}</td>
      <td>{{ promedio($c->id)['probabilidad'] }}</td>
      <td>{{ promedio($c->id)['D'].'%' }}</td>
      <td>{{ promedio($c->id)['I'].'%' }}</td>
      <td>{{ promedio($c->id)['I'].'%' }}</td>
      <td>{{ promedio($c->id)['A'].'%' }}</td>
      <td>{{ promedio($c->id)['NR'].'%' }}</td>
      <td>
		<a href="#" title="Ver detalles"><i class="ace-icon fa fa-plus acciones"></i></a>
		<a href="#" title="editar"><i class="ace-icon fa fa-edit acciones"></i></a>
		<a href="#" title="Eliminar"><i class="ace-icon fa fa-trash acciones accion-delete" data-id='4'></i></a>
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