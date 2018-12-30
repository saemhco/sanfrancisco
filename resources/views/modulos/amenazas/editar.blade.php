@extends('plantilla.usuario')
@section('titulo','Seguimiento')

@section('estilos')  
{!!Html::style('plantilla/css/select2.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Relación de Amenazas</li>
	<li class=""><a href="{{ route('ame.index') }}">Amenazas</a></li>
	<li class="">editar</li>
</ul>
@endsection

@section('contenido')

{!! Form::model($amenaza,['route' => ['ame.update',$amenaza->id], 'method' => 'PUT','id'=>'myform', 'class'=>'form-horizontal form-label-left', 'enctype'=>'multipart/form-data']) !!}
	{{ csrf_field() }}
		
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Tipo de Amenaza </label>
			<div class="col-sm-9">
				{!!Form::text('tipo', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..'])!!}
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Código </label>
			<div class="col-sm-9">
				{!!Form::text('codigo', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..'])!!}
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Amenaza </label>
			<div class="col-sm-9">
				{!!Form::text('nombre', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..'])!!}
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Descripción </label>
			<div class="col-sm-9">
				{!!Form::text('descripcion', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..'])!!}
			</div>
		</div>

		<div class="form-group" >
			<div class="col-sm-6">										
				<button type="submit" class="width-35 pull-right btn btn-sm btn-primary col-xs-10 col-sm-5">
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