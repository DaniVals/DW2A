document.addEventListener('readystatechange', function() {
	if (document.readyState === 'complete') {
		
		cargarDatos();

		console.log();
		
		document.getElementById('sumar' ).addEventListener('click', sumar);
		document.getElementById('borrar').addEventListener('click', borrar);
	}
});

function cargarDatos() {
	const contador = localStorage.getItem('contador');

	if (contador) {
		document.getElementById('resultado').innerText = contador;
	} else {
		document.getElementById('resultado').innerText = 0;
	}
}
function guardarDatos() {
	const contador = parseInt(document.getElementById('resultado').innerText);
	localStorage.setItem('contador', contador);
}

function sumar() {	
	const cantidad = document.getElementById('cantidad').value;
	document.getElementById('resultado').innerText = parseInt(cantidad) + parseInt(document.getElementById('resultado').innerText);
	guardarDatos();
}

function borrar() {
	localStorage.removeItem('contador');
	document.getElementById('resultado').innerText = 0;
}