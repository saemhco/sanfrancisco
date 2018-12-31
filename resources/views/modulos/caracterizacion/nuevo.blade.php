@extends('plantilla.usuario')
@section('titulo','Caracterización')

@section('estilos')  
{!!Html::style('plantilla/css/select2.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active"><a href="{{ route('caract.index') }}">Caracterización</a></li>
	<li class="">nuevo</li>
</ul>

@endsection
@section('contenido')
{!! Form::open(['route' => 'caract.store', 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left']) !!}
									{{ csrf_field() }}
		<br>
		
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Activo </label>
			<div class="col-sm-9">
				{!!Form::select('activo',$activos,['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'disabled'=>'false', 'id'=>'select2-id','required'])!!}
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
						
						<td class="center">
							<label class="block">
								<input name="amenazas[]" type="checkbox" class="ace input-lg" value="{{$k->id}}">
								<span class="lbl bigger-120"></span>
							</label>
						</td>

						<td>{!!Form::number('probabilidad[]',null,
							['class'=> 'form-col-1', 'max'=>'5','min'=>'0', 'step'=>'1'])!!}</td>
						<td>{!!Form::number('D[]',null, 
							['class'=> 'form-col-1','min'=>'0', 'max'=>'1','step'=>'0.1'])!!}</td>
						<td>{!!Form::number('I[]',null , 
							['class'=> 'col-1','min'=>'0','max'=>'1', 'step'=>'0.1'])!!}</td>
						<td>{!!Form::number('C[]',null, 
							['class'=> 'col-1','min'=>'0','max'=>'1', 'step'=>'0.1'])!!}</td>
						<td>{!!Form::number('A[]',null, 
							['class'=> 'col-1','min'=>'0','max'=>'1', 'step'=>'0.1'])!!}</td>
						<td>{!!Form::number('NR[]',null, 
							['class'=> 'col-1','min'=>'0','max'=>'1', 'step'=>'0.1'])!!}</td>						
					</tr>
					@endforeach
					
				</tbody>		
			</table>
		<div class="form-group" >
			<div class="col-sm-6">										
				<button type="submit" class="width-35 pull-right btn btn-sm btn-primary col-xs-10 col-sm-5">
				
				<i class="ace-icon fa fa-cog" ></i>
				<span class="bigger-110">Guardar</span>
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