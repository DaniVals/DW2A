document.addEventListener('readystatechange', function() {
	if (document.readyState === 'complete') {
		
		cargarDatos();
		
		document.getElementById('bgcolor').addEventListener("change", sacarCambios);
		document.getElementById('font').addEventListener("change", sacarCambios);
		document.getElementById('image').addEventListener("change", sacarCambios);
	}
});

function cargarDatos() {
	const bgcolor = localStorage.getItem('bgcolor');
	const font = localStorage.getItem('font');
	const image = localStorage.getItem('image');
	mostrarCambios(bgcolor, font, image);
}
function guardarDatos() {
	const bgcolor = document.getElementById('bgcolor').value;
	const font = document.getElementById('font').value;
	const image = document.getElementById('image').value;
	localStorage.setItem('bgcolor', bgcolor);
	localStorage.setItem('font', font);
	localStorage.setItem('image', image);
}

function sacarCambios() {
	const new_bgcolor = document.getElementById('bgcolor').value;
	const new_font = document.getElementById('font').value;
	const new_image = document.getElementById('image').value;

	mostrarCambios(new_bgcolor, new_font, new_image);
	guardarDatos();
}
function mostrarCambios(new_bgcolor, new_font, new_image) {
	document.body.style.backgroundColor = new_bgcolor;
	document.body.style.fontFamily = new_font;
	document.getElementById("foto").src = new_image;
}