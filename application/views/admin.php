<!DOCTYPE HTML>

<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/logo.ico">
		<title>SIE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
		<noscript><link rel="stylesheet" href="<?php echo base_url();?>assets/css/noscript.css"></noscript>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main1.css">
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		
		<!-- Scripts -->
			<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/browser.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/breakpoints.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/util.js"></script>
			<script src="<?php echo base_url();?>assets/js/main.js"></script>
			<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	</head>
	<div class="container">
	<h1>Usuarios</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Correo</th>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th>Teléfono</th>

			</tr>

		</thead>
		<tbody>

			<?php foreach($usuario as $p):
				print("<tr>\n");
				print("<td>".$p->Id);
				print("<td>".$p->Nombre);
				print("<td>".$p->Apellido);
				print("<td>".$p->Correo);
				print("<td>".$p->Usuario);
				print("<td>".$p->Clave);
				print("<td>".$p->Telefono);
				print("<td><a class='btn btn-warning' href='editar/$p->Id'>editar</a></td>");
				print("<td><a class='btn btn-danger' href='eliminar/$p->Id'>eliminar</a></td>");
				print("</tr>\n");
			endforeach;

			?>

		</tbody>
	</table>

</div>