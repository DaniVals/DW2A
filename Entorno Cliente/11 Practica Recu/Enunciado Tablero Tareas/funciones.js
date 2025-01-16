// eventos primera tarea
let tareas = document.getElementsByClassName("tarea");
let cerrar = document.getElementsByClassName("close");
let id = 0;

for (let i = 0; i < tareas.length; i++) {
	tareas[i].draggable = true;
	tareas[i].id = id++;
	tareas[i].addEventListener("dragstart", drag);
}
for (let i = 0; i < cerrar.length; i++) {
	cerrar[i].addEventListener("click", borrarPadre);
}

// eventos categorias
const categorias = document.getElementsByClassName("tasks");
for (let i = 0; i < categorias.length; i++) {
	categorias[i].addEventListener("dragover", allowDrop);
	categorias[i].addEventListener("drop", drop);
}

function allowDrop(ev) {
	ev.preventDefault();
}
function drag(ev) {
	ev.dataTransfer.setData("text", ev.target.id);
}
function drop(ev) {
	ev.preventDefault();
	var data = ev.dataTransfer.getData("text");

	if (ev.target.parentNode.className == "tasks") {
		ev.target.parentNode.appendChild(document.getElementById(data));
	}else{
		ev.target.appendChild(document.getElementById(data));
	}
}

// añadir tareas

const anadir = document.getElementById("boton");

anadir.addEventListener("click", function () {

	if (document.getElementById("tareaAnadir").value == "") {
		alert("Introduce una tarea");
		return;
	}

	const tarea = document.createElement("div");
	tarea.className = "tarea";

	tarea.draggable = true;
	tarea.id = id++;
	tarea.addEventListener("dragstart", drag);

	const p1 = document.createElement("p");
	p1.innerText = document.getElementById("tareaAnadir").value;
	tarea.appendChild(p1);

	const p2 = document.createElement("p");
	p2.innerText = 'X';
	p2.className = "close";
	p2.addEventListener("click", borrarPadre);
	tarea.appendChild(p2);

	document.getElementsByClassName("tasks")[0].appendChild(tarea);
});

function borrarPadre(ev) {
	ev.target.parentNode.remove();
}