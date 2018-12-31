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
	$cont=0; $probabilidad=0;$D=0;$I=0;$C=0;$A=0;$NR=0;
	if($caracterizacion){
            foreach ($caracterizacion as $i) {
                $cont++;
                $probabilidad=$probabilidad+$i->probabilidad;
                if ($D<$i->dimension_D) {$D=$i->dimension_D;}
                if ($I<$i->dimension_I) {$I=$i->dimension_I;}
                if ($C<$i->dimension_C) {$C=$i->dimension_C;}
                if ($A<$i->dimension_A) {$A=$i->dimension_A;}
                if ($NR<$i->dimension_NR) {$NR=$i->dimension_NR;}
                
            }if($cont==0){$cont++;}
            $probabilidad=round($probabilidad/$cont);
            $D=round(100*$D);
            $I=round(100*$I);
            $C=round(100*$C);
            $A=round(100*$A);
            $NR=round(100*$NR);
        }
	$msj= array('probabilidad' =>$probabilidad,'D' =>$D,'I' =>$I,'A' =>$A,'NR' =>$NR,'C' =>$C);
	return $msj;
}
?>
<div class="col-xs-12">
	<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>

		<div class="table-header">
			<a href="{{ route('caract.new') }}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> Nuevo </a>
			
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
		<a href="#" title="Ver detalles" onclick="vermas({{$c->id}});"><i class="ace-icon fa fa-plus acciones"></i></a>
		<a href="{{ route('caract.edit',$c->id) }}" title="editar"><i class="ace-icon fa fa-edit acciones"></i></a>
		
	 </td>
    </tr>
  	@endforeach
  </tbody>
</table>

		</div>
</div>

{{-- modal nuevo --}}
<div id="verMas" class="modal fade" tabindex="-1">
</div>
{{-- fin modal --}}
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

	function vermas($id){
		//alert($id);

		$.ajax({ 
			url: '/caracterizacion/vermas/'+$id,
			success: function (data) {
				$('#verMas').html(data);
		        $('#verMas').modal();
			},
						               
			error: function(error){
				console.log(error);	                  
			}
		});
		
	}
				// $(document).on('click', '.acciones-vermas', function(event) {
		  //        var id = $(this).data('id');
		  //        	$.ajax({ 
				// 	            url: '/rsu/mis_proyectos/show-msj/',
				// 	            type: 'POST',
				// 	            data: {_token: '{{csrf_token()}}', proyecto_id:id },
				// 	            success: function (data) {
				// 	            	//console.log(data);
				// 	               $('#comentarios_modal').html(data);
		  //        					$('#comentarios_modal').modal();
				// 	            },
					              
				// 	             error: function(error){
				//                 var r = error.responseJSON.message;
				//                 console.log(r);
			 //                   }
				// 		});
		        
		  //     });

		</script>

@endsection