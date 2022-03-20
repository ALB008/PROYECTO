const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    text: /^[[a-zA-ZÀ-ÿ\s]{4,10}$/,
    texto: /^[[a-zA-ZÀ-ÿ\s\ ]{4,30}$/,
	texto1: /^[[a-zA-ZÀ-ÿ\s\ ]{4,70}$/, // Letras, numeros, guion y guion_bajo
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	num: /^[0-9]{7,20}$/, // 1 a 2 digitos.
	num2: /^[0-9]{7,13}$/,
	
}

const campos = {
	id: false,
	nombre: false,
	apell: false,
	tel: false,
	email: false,
	gen: false,
	estud: false
}

const ValidarFormulario = (e) => {
	switch(e.target.name) {
		case "id":
			ValidarCmpo(expresiones.num, e.target, 'id');
		break;		
		
		case "nombre":
			ValidarCmpo(expresiones.texto, e.target, 'nombre');		
		break;

		case "apell":
			ValidarCmpo(expresiones.texto1, e.target, 'apell');
		break;

		case "tel":
			ValidarCmpo(expresiones.num2, e.target, 'tel');
		break;

		case "email":
            ValidarCmpo(expresiones.correo, e.target, 'email');
		break;

		case "gen":
			ValidarCmpo(expresiones.text, e.target, 'gen');
		break;

		case "estud":
			ValidarCmpo(expresiones.texto, e.target, 'estud');
		break;

	}
}

const ValidarCmpo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campo[campo] = false;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', ValidarFormulario);
	input.addEventListener('blur', ValidarFormulario);
});

formulario.addEventListener('submit', (e) =>{
	e.preventDefault();

	if( campos.id && campos.nombre && campos.apell && campos.tel && campos.email && campos.gen && campos.estud){
		formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() =>{
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		},5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else{
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
		setTimeout(() =>{
			document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
		},5000);
	}
});
