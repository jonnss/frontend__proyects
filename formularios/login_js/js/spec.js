
const form = document.getElementById('form');
const usuario = document.getElementById('usuario');
const correo = document.getElementById('correo');
const pw = document.getElementById('pw');

function mostrarError(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function quitarError(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function expresionCorreo(correo) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(correo);
}


form.addEventListener('submit', e => {

	const usuarioValue = usuario.value.trim();
	const correoValue = correo.value.trim();
	const pwValue = pw.value.trim();
	
	//Validación de usuario
	if(usuarioValue === '') {
		e.preventDefault();
		mostrarError(usuario, 'Debes ingresar un usuario.');
	} 
	else{
		if(usuarioValue.length <5){
			e.preventDefault();
			mostrarError(usuario, 'Nombre de usuario muy corto.');	
		}
		else if(usuarioValue.length >20){
			e.preventDefault();
			mostrarError(usuario,'Nombre de usuario muy largo.');
		}
		else{
			quitarError(usuario);
		}
	}
	
	//validación de correo
	if(correoValue === '') {
		e.preventDefault();
		mostrarError(correo, 'Debes ingresar algún correo.');
	} else if (!expresionCorreo(correoValue)) {
		e.preventDefault();
		mostrarError(correo, 'El correo no es válido.');
	} else {
		quitarError(correo);
	}
	
	if(pwValue === '') {
		e.preventDefault();
		mostrarError(pw, 'Debes ingresar alguna contraseña.');
	}
	else{
		if(pwValue.length <5){
			e.preventDefault();
			mostrarError(pw, 'Contraseña demasiado corta.');
		}
		else if(pwValue.length > 20){
			e.preventDefault();s
			mostrarError(pw, 'Contraseña demasiado larga.');
		}
		else{
			quitarError(pw);
		}
	}

});






