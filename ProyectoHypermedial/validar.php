<?php
$mensaje=null;
$ms_nombre=null;
$ms_apellido=null;
$ms_cedula=null;
$ms_correo=null;
$ms_contrasenia=null;
if(isset($_POST['registrar'])){
	if(empty($nombre)&&empty($apellido)&&empty($cedula)&&empty($correo)&&empty($contrasenia)){
		$mensaje="Existen campos vacios";
	    }else{
		if(!preg_match("/^[a-zA-Z]+$/","$nombre")){
			$ms_nombre="Debe ingresar solo texto";	
	    }
	     if(!preg_match("/^[a-zA-Z]+$/","$apellido")){
			$ms_apellido="Debe ingresar solo texto";
		}
		 if(!preg_match("/^([0-9])*$/","$cedula")){
			$ms_cedula="Cédula no válida";
		 }if(strlen($cedula)!=10){
			$ms_cedula="Cédula no válida";	
			}
		 if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$ms_correo="Correo Incorrecto";
		}
		 if(!preg_match("/^([a-zA-Z]+[0-9]+)|([0-9]+[a-zA-Z]+)/i","$contrasenia")){
			$ms_contrasenia="La contraseña debe tener numeros y letras";
		}
	}
}
?>