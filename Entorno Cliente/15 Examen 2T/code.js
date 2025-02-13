document.addEventListener('readystatechange', function() {
	if (document.readyState === 'complete') {

		let div1 = document.createElement("div");
		div1.style["width"]  = "300px";
		div1.style["height"] = "400px";
		div1.style["border"] = "1px solid black";
		div1.id = "mainDiv";
		document.body.appendChild(div1);
		
		let boton = document.createElement("button");
		boton.style["margin"]  = "80px";
		boton.innerText = "Crear lista cantantes";
		boton.addEventListener("click", iniciarLista);
		div1.appendChild(boton);
		
		let div2 = document.createElement("div");
		div2.style["width"]  = "250px";
		div2.style["height"] = "150px";
		div2.style["border"] = "1px solid black";
		div2.id = "datos";
		div1.appendChild(div2);

	}
});


function iniciarLista(event) {
	let xhttp = new XMLHttpRequest();
	xhttp.onload = function() {

		const JSON_RESPONSE = JSON.parse(this.responseText);
		// console.log(JSON_RESPONSE);

		let lista = document.createElement("select");
		lista.id = "listaCantantes";
		lista.style["margin"]  = "80px";
		lista.addEventListener('change', cargarCantante);

		JSON_RESPONSE.forEach(cantante => {
			let opcion = document.createElement("option");
			opcion.value = cantante;
			opcion.innerText = cantante;
			lista.appendChild(opcion);
		});
		
		document.getElementById("mainDiv").insertBefore(lista, event.target);
		event.target.remove();
	}
	xhttp.open("GET", "cantantes.php");
	xhttp.send();
}

function cargarCantante() {
	const cantanteSeleccionado = document.getElementById("listaCantantes").value;
	
	const divDatos = document.getElementById("datos");
	divDatos.innerHTML = "";

	if (cantanteSeleccionado != "---") {		
		let xhttp = new XMLHttpRequest();
		xhttp.onload = function() {
	
			const JSON_RESPONSE = JSON.parse(this.responseText);
			console.log(JSON_RESPONSE);
	
			let imagen = document.createElement("img");
			imagen.src = JSON_RESPONSE["foto"];
			imagen.addEventListener('mouseenter', hoverImage);
			imagen.addEventListener('mouseleave', deleteZoomedImage);
			imagen.style["height"] = "50%";
			imagen.style["width"]  = "50%";
			imagen.style["display"] = "block";
			imagen.style["margin-left"] = "auto";
			imagen.style["margin-right"] = "auto";
			
			divDatos.appendChild(imagen);

			let tabla = document.createElement("table");
			tabla.style["width"]  = "100%";
			tabla.style["height"] = "50%";
			tabla.style["border"] = "1px solid black";

			let tablaFilaTitulo = document.createElement("tr");
			let tablaTituloT = document.createElement("th");
			tablaTituloT.innerText = "Título";
			let tablaTituloA = document.createElement("th");
			tablaTituloA.innerText = "Año";


			tablaFilaTitulo.appendChild(tablaTituloT);
			tablaFilaTitulo.appendChild(tablaTituloA);
			tabla.appendChild(tablaFilaTitulo);
			divDatos.appendChild(tabla);

			JSON_RESPONSE["canciones"].forEach(cancion => {
				let fila = document.createElement("tr");
				let filaT = document.createElement("td");
				filaT.innerText = cancion["titulo"];
				filaT.style["text-align"] = "center";
				let filaA = document.createElement("td");
				filaA.innerText = cancion["ano"];
				filaA.style["text-align"] = "center";
	
				fila.appendChild(filaT);
				fila.appendChild(filaA);
				tabla.appendChild(fila);
			});
			
		}
		xhttp.open("GET", "cantantes.php?cantante=" + cantanteSeleccionado);
		xhttp.send();
	}
}

function hoverImage(event) {
	console.log("CP1");
	console.log(event.target);

	let imagen = document.createElement("img");
	imagen.src = event.target.src;
	imagen.id = "zoomedImage";
	imagen.addEventListener('mouseleave', deleteZoomedImage);
	imagen.style["position"] = "fixed";
	// imagen.style["height"] = "50%";
	imagen.style["width"]  = "50%";
	imagen.style["bottom"] = "0px";
	imagen.style["right"]  = "0px";

	document.body.appendChild(imagen);
}

function deleteZoomedImage() {
	document.getElementById("zoomedImage").remove();
}