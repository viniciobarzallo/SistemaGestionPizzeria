// JavaScript Document
validarCamposObligatorios();
validarCedula();
validarLetrasn();
validarLetrasa();
vCorreo();
vContra();
validarCorreo();

function validarCamposObligatorios(formulario){
	//var bandera= true;
	cont=0;
	for (var i=0; i<formulario.length; i++){
		var elemento = formulario.elements[i];
	if(elemento.value == null || elemento.value == ''){
	//	bandera=false;
		cont ++;
		elemento.style.border = "2px solid red";
		//alert("Debes llenar todos los campos (*)");
		//break;	
	}
	}
	//return bandera;
	if(cont==0){
		return true;
	}else{
		document.getElementById('cedula'.innerHTML='Debe ingresar numero de cedula');
		return false;
	}
}

function validarCedula(){
	var numCedula = document.getElementById("cedula").value.trim();
	var total = 0;
    var tamaño = numCedula.length;
	var tamañov = tamaño - 1;
	if (numCedula != " " && tamaño < 10 && numCedula != parseInt(numCedula)){
		cedula.style.border = "2px solid red";
		document.getElementById("mensaje").innerHTML="Ingresar los 10 digitos de la cedula"
	 }else{
		 
		 if (numCedula != " " && tamaño == 10){
		for(i = 0; i < tamañov; i++){
			if (i%2 == 0) {
				var aux = numCedula.charAt(i) * 2;
				if (aux > 9) aux -= 9;
				total += aux;
			} else {
              total += parseInt(numCedula.charAt(i));
            }
          }

          total = total % 10 ? 10 - total % 10 : 0;

          if (numCedula.charAt(tamaño-1) == total) {
			  cedula.style.border = "2px solid blue";
			  document.getElementById("mensaje").innerHTML="";
            //alert("Cedula válida");
          }else{
			  cedula.style.border = "2px solid red";
            //alert("Cedula inválida");
          }
        } 
	 }
}

function validarLetrasn(){
	
	var letras = document.getElementById("nombre").value;
	for(var i=0; i<letras.length; i++){
		if (/^([0-9])*$/.test(letras.charAt(i))){
			nombre.style.border = "2px solid red";
			//alert("Este campo no permite ingresar valores numericos");
			nombre.value="";
			document.getElementById("mensaje").innerHTML="Ingresar letras";
			break;
		} else{
			nombre.style.border = "2px solid blue";
			document.getElementById("mensaje").innerHTML="";
		}		
	}
}

function validarLetrasa(){
	
	var letras = document.getElementById("apellido").value;
	for(var i=0; i<letras.length; i++){
		if (/^([0-9])*$/.test(letras.charAt(i))){
			//alert("Este campo no permite ingresar valores numéricos");
			apellido.value="";
			apellido.style.border = "2px solid red";
			document.getElementById("mensaje").innerHTML="Ingresar letras";
		} else{
			apellido.style.border = "2px solid blue";
			document.getElementById("mensaje").innerHTML="";
		}
		
	}
}

function vCorreo(){
    var valor =document.getElementById('correo').value;
		for(var i=0; i<valor.length; i++){
		if (/^([0-9])*$/.test(valor.charAt(i))){
			//alert("Este campo no permite ingresar valores numéricos");
			correo.value="";
			correo.style.border = "2px solid red";
			correo.getElementById("mensaje").innerHTML="Ingresar  correo";
		} else{
			correo.style.border = "2px solid blue";
			document.getElementById("mensaje").innerHTML="";
		}
		
	}
}
function vContra(){
  	var letras = document.getElementById("pass").value;
	for(var i=0; i<letras.length; i++){
		if (/^([0-9])*$/.test(letras.charAt(i))){
			//alert("Este campo no permite ingresar valores numéricos");
			pass.value="";
			pass.style.border = "2px solid red";
			document.getElementById("mensaje").innerHTML="Ingresar letras";
		} else{
		    pass.style.border = "2px solid blue";
			document.getElementById("mensaje").innerHTML="";
		}
		
	}
}
function validarCorreo(){
    var email =document.getElementById('correo').value;
	var caracteres = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
	if (caracteres.test(email)) {
      //alert("válido");
		correo.style.border = "2px solid blue";
		document.getElementById("mensaje").innerHTML="";
	} else {
      //alert("incorrecto");
		correo.value = "";
		cooreo.style.border = "2px solid red";
		document.getElementById("mensaje").innerHTML="Verificar que contenga una @ y .";
	}
}