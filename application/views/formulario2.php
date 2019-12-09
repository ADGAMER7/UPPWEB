<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/logo.ico" />
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- Ajusta contenido al dispositivo -->
    <meta http-equiv="x-ua-compatible" content="ie-edge"> <!--Compativilidad con navegarores-->
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/estilosForm.css">
    <script src="<?php echo base_url();?>assets/js/Formulario.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    
	<title>SIE</title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
</head>
<body>
	<!-- Logo 
	<a href="index.html" class="logo">
		<span class="symbol"><img src="images/upp.png" alt="" /></span><span class="title">Sistema Integral Extracurricular</span>
	</a>
 Image and text -->
 	<h3 align="center">Sistema Integral Extracurricular</h3>

<div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Iniciar sesión</a>
                <a href="<?php echo base_url('index.php/Control/administrador');?>" class="active" id="login-form-link">Administrador</a>
              </div>
            <!--  <div class="col-xs-6">
                <a href="#" id="register-form-link">Regístrate ahora</a>
              </div>-->
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="<?php echo base_url('index.php/Control/perfil');?>" method="post" role="form" style="display: block; "onsubmit="return validar2();">
                    <div class="form-group">
                    <input type="text" name="telefono" id="telefono" tabindex="1" class="form-control" placeholder="Matricula" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="clave" id="clave" tabindex="2" class="form-control" placeholder="Contraseña" required>
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Recordarme</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Ingresar">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo electronico" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar contraseña" required>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Crear cuenta">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  	<!-- Scripts -->

	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>