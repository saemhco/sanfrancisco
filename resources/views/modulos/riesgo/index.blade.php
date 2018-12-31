@extends('plantilla.usuario')
@section('titulo','Mapa de Riesgo')
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
	<li class="active">Mapa de Riesgo</li>
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
			<a href="#verMas" class="btn btn-xs btn-success" data-toggle="modal"><i class="fa fa-plus"></i> Ver Leyenda </a>			
		</div>
		<div class="table-responsive">
<table  border="2" width="100%" id="dynamic-table" class="table table-striped table-bordered table-hover table-condensed">
  <thead >
    <tr  align="center" valign="middle">
      <th rowspan="2"  class="center">Categoría</th>
      <th rowspan="2"  class="center">N°</th>
      <th rowspan="2"  class="center">Capa</th>
      <th rowspan="2"  class="center">Código</th>
			<th rowspan="2"  class="center">Activo</th>
      <th rowspan="2"  class="center">Probabilidad</th>
      <th colspan="5"  class="center">Dimensiones</th>
      
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
			<td>{{ $c->capa->capa}}</td>
      <td>{{ $c->codigo}}</td>
      <td>{{ $c->nombre}}</td>
      <td>{{promedio($c->id)['probabilidad']}}</td>
			<?php 
				//variable D
				$d_D=round( $c->dimension_D*promedio($c->id)['D']) * promedio($c->id)['probabilidad'];
				if ($d_D >=0 && $d_D<2){
					$color_D="#91E8ED";
					$msj_D="Controlable";
				}
				else if ($d_D >=2 && $d_D<6){
					$color_D="green";
					$msj_D="Aceptable";
				}
				else if ($d_D >=6 && $d_D<17){
					$color_D="yellow";
					$msj_D="Tolerable";
				}
				else if ($d_D >=17 && $d_D<31){
					$color_D="orange";
					$msj_D="Intolerable";
				}
				else if ($d_D >=31 && $d_D<51){
					$color_D="red";
					$msj_D="Extremo";
				}
				else {
					$color_D="";
					$msj_D="No definido";
				};

				//variable I
				$d_I=round( $c->dimension_I*promedio($c->id)['I']) * promedio($c->id)['probabilidad'];
				if ($d_I >=0 && $d_I<2){
					$color_I="#91E8ED";
					$msj_I="Controlable";
				}
				else if ($d_I >=2 && $d_I<6){
					$color_I="green";
					$msj_I="Aceptable";
				}
				else if ($d_I >=6 && $d_I<17){
					$color_I="yellow";
					$msj_I="Tolerable";
				}
				else if ($d_I >=17 && $d_I<31){
					$color_I="orange";
					$msj_I="Intolerable";
				}
				else if ($d_I >=31 && $d_I<51){
					$color_I="red";
					$msj_I="Extremo";
				}
				else {
					$color_I="";
					$msj_I="No definido";
				};

				//variable C
				$d_C=round( $c->dimension_C*promedio($c->id)['C']) * promedio($c->id)['probabilidad'];
				if ($d_C >=0 && $d_C<2){
					$color_C="#91E8ED";
					$msj_C="Controlable";
				}
				else if ($d_C >=2 && $d_C<6){
					$color_C="green";
					$msj_C="Aceptable";
				}
				else if ($d_C >=6 && $d_C<17){
					$color_C="yellow";
					$msj_C="Tolerable";
				}
				else if ($d_C >=17 && $d_C<31){
					$color_C="orange";
					$msj_C="Intolerable";
				}
				else if ($d_C >=31 && $d_C<51){
					$color_C="red";
					$msj_C="Extremo";
				}
				else {
					$color_C="";
					$msj_C="No definido";
				};
				//variable A
				$d_A=round( $c->dimension_A*promedio($c->id)['A']) * promedio($c->id)['probabilidad'];
				if ($d_A >=0 && $d_A<2){
					$color_A="#91E8ED";
					$msj_A="Controlable";
				}
				else if ($d_A >=2 && $d_A<6){
					$color_A="green";
					$msj_A="Aceptable";
				}
				else if ($d_A >=6 && $d_A<17){
					$color_A="yellow";
					$msj_A="Tolerable";
				}
				else if ($d_A >=17 && $d_A<31){
					$color_A="orange";
					$msj_A="Intolerable";
				}
				else if ($d_A >=31 && $d_A<51){
					$color_A="red";
					$msj_A="Extremo";
				}
				else {
					$color_A="";
					$msj_A="No definido";
				};
				//variable NR
				$d_NR=round( $c->dimension_NR*promedio($c->id)['NR']) * promedio($c->id)['probabilidad'];
				if ($d_NR >=0 && $d_NR<2){
					$color_NR="#91E8ED";
					$msj_NR="Controlable";
				}
				else if ($d_NR >=2 && $d_NR<6){
					$color_NR="green";
					$msj_NR="Aceptable";
				}
				else if ($d_NR >=6 && $d_NR<17){
					$color_NR="yellow";
					$msj_NR="Tolerable";
				}
				else if ($d_NR >=17 && $d_NR<31){
					$color_NR="orange";
					$msj_NR="Intolerable";
				}
				else if ($d_NR >=31 && $d_NR<51){
					$color_NR="red";
					$msj_NR="Extremo";
				}
				else {
					$color_NR="";
					$msj_NR="No definido";
				};
			?>
      <td style='background-color:{{$color_D}}'tittle='{{$msj_D}}'>{{ $d_D }} </td>
      <td style='background-color:{{$color_I}}'tittle='{{$msj_I}}'>{{ $d_I }} </td>
      <td style='background-color:{{$color_C}}'tittle='{{$msj_C}}'>{{ $d_C }} </td>
      <td style='background-color:{{$color_A}}'tittle='{{$msj_A}}'>{{ $d_A }} </td>
      <td style='background-color:{{$color_NR}}'tittle='{{$msj_NR}}'>{{ $d_NR }} </td>
      
    </tr>
  	@endforeach
		
  </tbody>
</table>
		</div>
</div>

{{-- modal nuevo --}}
<div id="verMas" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">				
				<label><b>Leyenda</label>
			</div>			
			<div class="modal-body responsive" >
				<div>
					<img src="{{url('plantilla/images/gallery/tabla-riesgo.jpeg')}}" width='100%' >
				</div>				
			</div>						
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
{{-- fin modal --}}

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