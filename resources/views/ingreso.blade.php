<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesión</title>
	<link rel="icon" type="image/png" href="{{url('plantilla/images/gallery/unheval-logo.png')}}" />
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="{{url('plantilla/Login_v6/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('plantilla/Login_v6/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('plantilla/Login_v6/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('plantilla/Login_v6/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('plantilla/Login_v6/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{url('plantilla/Login_v6/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('plantilla/Login_v6/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('plantilla/Login_v6/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{url('plantilla/Login_v6/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('plantilla/Login_v6/css/util.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('plantilla/Login_v6/css/main.css')}}">
<!--===============================================================================================-->
</head>

<body>
{{--  --}}
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-85 p-b-20">
          <form class="login100-form validate-form" method="post" action="/login" name="login">
            {!!csrf_field() !!}
          <span class="login100-form-title p-b-70">
            Iniciar Sesión
          </span>
          <span class="login100-form-avatar">
            <img src="plantilla/images/gallery/logo.jpg">
          </span>

          <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresar Usuario">
            <input class="input100" type="text" name="dni" value="{{ old('dni') }}" maxlength="8">
            <span class="focus-input100" data-placeholder="Usuario"></span>
          </div>{!! $errors->first('dni','<span class="help-block" style="color:rgba(233, 1, 1,.9); ">*:message</span>')!!}

          <div class="wrap-input100 validate-input m-b-50" data-validate="Ingresar Contraseña">
            <input class="input100" type="password" name="password">
            <span class="focus-input100" data-placeholder="Contraseña"></span>
          </div>{!! $errors->first('password','<span class="help-block"  style=" color:rgba(233, 1, 1,.9);">*:message</span>')!!} 

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
              Ingresar
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
  
  {!!Html::script('plantilla/Login_v6/js/jquery-2.1.4.min.js')!!}
<!--===============================================================================================-->
 {!!Html::script('plantilla/Login_v6/vendor/jquery/jquery-3.2.1.min.js')!!}
<!--===============================================================================================-->
 {!!Html::script('plantilla/Login_v6/vendor/animsition/js/animsition.min.js')!!}
<!--===============================================================================================-->
 {!!Html::script('plantilla/Login_v6/vendor/bootstrap/js/popper.js')!!}
 {!!Html::script('plantilla/Login_v6/vendor/bootstrap/js/bootstrap.min.js')!!}
<!--===============================================================================================-->
 {!!Html::script('plantilla/Login_v6/vendor/select2/select2.min.js')!!}
<!--===============================================================================================-->
 {!!Html::script('plantilla/Login_v6/vendor/daterangepicker/moment.min.js')!!}
 {!!Html::script('plantilla/Login_v6/vendor/daterangepicker/daterangepicker.js')!!}
<!--===============================================================================================-->
 {!!Html::script('plantilla/Login_v6/vendor/countdowntime/countdowntime.js')!!}
<!--===============================================================================================-->
 {!!Html::script('plantilla/Login_v6/js/main.js')!!}

</body>
</html>