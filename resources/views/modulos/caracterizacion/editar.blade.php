@extends('plantilla.usuario')
@section('titulo','Mapa de Riezgos')

@section('estilos')  
{!!Html::style('plantilla/css/select2.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Mapa de Riezgos</li>
	<li class=""><a href="{{ route('caract.index') }}">Amenazas</a></li>
	<li class="">editar</li>
</ul>
@endsection

@section('contenido')

{!! Form::model($activo,['route' => ['caract.update',$activo->id], 'method' => 'PUT','id'=>'myform', 'class'=>'form-horizontal form-label-left']) !!}
	{{ csrf_field() }}
		<br>
		
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Activo </label>
			<div class="col-sm-9">
				{!!Form::text('activo',$activo->nombre , ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'disabled'=>'true'])!!}
			</div>
		</div>
		<table id="dynamic-table" class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						
						<th class="center" class="hidden-480">Tipo</th>
						<th class="center">Codigo</th>
						<th class="center">Amenaza</th>
						<th class="center">Desripcion</th>	
						<th class="center" class="hidden-480" title="No repudio">Seleccionar</th>
						<th class="center">Probabilidad</th>	
						<th  class="center">[D]</th>
				    	<th  class="center">[I]</th>
				    	<th  class="center">[C]</th>
				    	<th  class="center">[A]</th>
				    	<th  class="center">[N_R]</th>			
					</tr>
				</thead>
				<tbody>
					@foreach($amenazas as $k)
					<tr >
						
						<td align="center">{{$array_amenazas[$k->tipo]}}</td>
						<td align="center">{{$k->codigo}}</td>
						<td>{{$k->nombre}}</td>
						<td>{{$k->descripcion}}</td>
						<?php
							$buscar=\App\Caracterizacion::where('activo_id',$activo->id)->where('amenaza_id',$k->id)->first();
						
							if($buscar!=''){
								$checked='checked';
							} else{
								$checked='-';
							}
							
						?>
						<td class="center">
							<label class="block">
								<input name="amenazas[]" type="checkbox" class="ace input-lg" {{$checked}} value="{{$k->id}}">
								<span class="lbl bigger-120"></span>
							</label>
						</td>

						<td>{!!Form::number('probabilidad[]',$buscar !='' ? $buscar->probabilidad : null ,
							['class'=> 'form-col-1', 'max'=>'5','min'=>'0', 'step'=>'1'])!!}</td>
						<td>{!!Form::number('D[]',$buscar !='' ? $buscar->dimension_D : null, 
							['class'=> 'form-col-1','min'=>'0', 'max'=>'1','step'=>'0.1'])!!}</td>
						<td>{!!Form::number('I[]',$buscar !='' ? $buscar->dimension_I : null , 
							['class'=> 'col-1','min'=>'0','max'=>'1', 'step'=>'0.1'])!!}</td>
						<td>{!!Form::number('C[]',$buscar !='' ? $buscar->dimension_C : null, 
							['class'=> 'col-1','min'=>'0','max'=>'1', 'step'=>'0.1'])!!}</td>
						<td>{!!Form::number('A[]',$buscar !='' ? $buscar->dimension_A : null, 
							['class'=> 'col-1','min'=>'0','max'=>'1', 'step'=>'0.1'])!!}</td>
						<td>{!!Form::number('NR[]',$buscar !='' ? $buscar->dimension_NR : null, 
							['class'=> 'col-1','min'=>'0','max'=>'1', 'step'=>'0.1'])!!}</td>						
					</tr>
					@endforeach
					
				</tbody>		
			</table>
		<div class="form-group" >
			<div class="col-sm-6">										
				<button type="submit" class="width-35 pull-right btn btn-sm btn-primary col-xs-10 col-sm-5">
				<input type="hidden" name="activo_id" value="{{ $activo->id }}">
				<i class="ace-icon fa fa-cog" ></i>
				<span class="bigger-110">Actualizar</span>
				</button>
			</div>
		</div>							
									
									
	{!! Form::close() !!}
@endsection
@section('script')
{!!Html::script('/plantilla/js/select2.min.js')!!}
<script type="text/javascript">
	$(document).ready(function() {
    	$('#select2-id').select2();
	});
</script>
@endsection