function validar(){
	var nombre, apellido, correo, clave, telefono, expresionR;

	nombre=document.getElementById('nombre').value;
	apellido=document.getElementById('apellido').value;
	correo=document.getElementById('correo').value;
	clave=document.getElementById('clave').value;
	telefono=document.getElementById('telefono').value;

	expresionR=/\w+@\w+\.+[a-z]/;

	if (nombre==""||apellido==""||correo==""||clave==""||telefono=="") {
		alert("Campos vacios");
		return false;

	}
	else if (nombre.length>30) {
		alert("nombre demasiado largo");
		return false;
	}else if (apellido.length>30) {
		alert("apellido demasiado largo");
		return false;
	}else if (correo.length>50) {
		alert("correo demasiado largo");
		return false;
	}else if (!expresionR.test(correo)) {
		alert("correo invalido");
		return false;
	}else if (clave.length>10) {
		alert("clave demasiado larga");
		return false;
	}else if (telefono.length>10) {
		alert("Matricula demasiado larga");
		return false;
	}else if (isNaN (telefono) ){
		alert("Matricula invalida, solo se aceptan números");
		return false;
	}

	}