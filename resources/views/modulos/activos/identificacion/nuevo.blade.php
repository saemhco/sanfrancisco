@extends('plantilla.usuario')
@section('titulo','Nuevo Activo')

@section('estilos')  
{!!Html::style('plantilla/css/select2.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Relación de activos</li>
	<li class="">activos</li>
	<li class=""><a href="{{ route('act.reg.index') }}">identificación</a></li>
	<li class="">nuevo</li>
</ul>

@endsection
@section('contenido')
{!! Form::open(['route' => 'act.reg.store', 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left']) !!}
									{{ csrf_field() }}
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Capa - Categoría </label>

										<div class="col-sm-9">
											{!!Form::select('capa_id',$capas, null,['class'=>'col-xs-10 col-sm-10 col-sm-5','placeholder' => 'Seleccione', 'id'=>'select2-id', 'required'])!!}
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Código </label>
										<div class="col-sm-9">
											{!!Form::text('codigo', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..'])!!}
										</div>

									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> N° </label>
										<div class="col-sm-9">
											{!!Form::text('n', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..'])!!}
										</div>

									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Activo </label>
										<div class="col-sm-9">
											{!!Form::text('nombre', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..'])!!}
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Unidad (UN) </label>
										<div class="col-sm-9">
											{!!Form::number('unidad', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..'])!!}
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Costo Unitario (S/) </label>
										<div class="col-sm-9">
											{!!Form::number('costo_unitario', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5',  'step'=>'0.25', 'placeholder'=>'escribir aquí..'])!!}
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Leyenda </label>
										<div class="col-sm-9">
											<img src="{{url('plantilla/images/gallery/tabla-activos.jpeg')}}" align="center" height="150px;">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Disponibilidad [D] </label>
										<div class="col-sm-9">
											{!!Form::number('dimension_D', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..', 'min'=>'0', 'max'=>'10'])!!}
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Integridad [I] </label>
										<div class="col-sm-9">
											{!!Form::number('dimension_I', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..','min'=>'0', 'max'=>'10'])!!}
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Confidencialidad [C] </label>
										<div class="col-sm-9">
											{!!Form::number('dimension_C', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..','min'=>'0', 'max'=>'10'])!!}
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Autenticidad [A] </label>
										<div class="col-sm-9">
											{!!Form::number('dimension_A', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..','min'=>'0', 'max'=>'10'])!!}
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> No Repudio [N_R] </label>
										<div class="col-sm-9">
											{!!Form::number('dimension_NR', null, ['class'=> 'col-xs-10 col-sm-10 col-sm-5', 'placeholder'=>'escribir aquí..','min'=>'0', 'max'=>'10'])!!}
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