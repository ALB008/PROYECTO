const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	texto1: /^[[a-zA-ZÀ-ÿ\s0-9\ \/\-\(\)\=\?\¿\,\;\.\+\*\!\¡]{2,50}$/, // Letras, numeros, guion y guion_bajo
	texto2: /^[a-zA-ZÀ-ÿ\s0-9\.]{4,200}$/, // Letras y espacios, pueden llevar acentos.
    texto3: /^[a-zA-Z0-9]{6}$/,
	num: /^[0-9]{1,4}$/, // 1 a 2 diitos.
    num1: /^[0-9]{1,4}$/,
	num2: /^[0-9]{13}$/,
	
}

const campos = {
	isbn: false,
	cod: false,
	nombre: false,
	desc: false,
	anno: false,
	pag: false
	
}

const ValidarFormulario = (e) => {
	switch(e.target.name) {
		case "isbn":
			ValidarCmpo(expresiones.num2, e.target, 'isbn'); v
		break;		
		
		case "cod":
			ValidarCmpo(expresiones.texto3, e.target, 'cod');		
		break;

		case "nombre":
			ValidarCmpo(expresiones.texto1, e.target, 'nombre');
		break;

		case "desc":
			ValidarCmpo(expresiones.texto2, e.target, 'desc');
		break;

		case "anno":
			ValidarCmpo(expresiones.num, e.target, 'anno');
		break;

		case "pag":
			ValidarCmpo(expresiones.num, e.target, 'pag');
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

	if( campos.nombre && campos.isbn && campos.cod && campos.desc && campos.anno && campos.pag){
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
