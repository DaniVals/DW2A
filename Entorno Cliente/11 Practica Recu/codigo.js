// AÑADIR EVENTOS
document.addEventListener('readystatechange',cargarEventListeners,false);

function cargarEventListeners() {
    if (document.readyState == 'complete') {

        let botones = document.getElementsByTagName('button');

        botones[0].addEventListener('click', anadirVehiculo);
        botones[1].addEventListener('click', enviarPedido);
    }
}


// CODIGO DE PEDIDOS

var coches = [];

const widthVent = 500;
const heightVent = 900;

function anadirVehiculo() {
    let precio = 12000;

    const motor = document.getElementById('motor').value;
    switch (motor) {
        case 'diesel':
            precio += 1500;
            break;
        case 'hibrido':
            precio += 3000;
            break;
    }

    const modelo = document.getElementById('modelo').value;
    switch (modelo) {
        case '3puertas':
            if (motor != 'gasolina') {
                alert('Solo se puede seleccionar 3 puertas con motor de gasolina');
                return false;
            }
            precio -= 2000;
            break;
        case 'familiar':
            precio += 2000;
            break;
    }

    const color = document.getElementById('color').value;
    switch (color) {
        case 'blanco':
            precio -= 500;
            break;
        case 'negro':
            precio -= 600;
            break;
    }

    const pinturaMetalizada = document.getElementById('pinturaMetalizada').checked;
    if (pinturaMetalizada == true) {
        if (color != 'verde' && color != 'rojo' && color != 'naranja') {
            alert('Solo se puede poner pintura metalizada en el color Verde, Rojo o Naranja');
            return false;
        }
    }

    const dvd = document.getElementById('dvd').checked;
    if (dvd == true) {
        if (modelo != 'familiar') {
            alert('Solo se puede seleccionar 3 puertas con motor de gasolina');
            return false;
        }
        precio -= 2000;
    }

    let coche = [precio, motor, modelo, color, pinturaMetalizada, dvd];

    coches.push(coche);
    console.log(coches);
    return true;
}

function enviarPedido() {

    let comprobacion = true;

    const regexTextoNoVacio = /^[a-zñáéíóú ]+$/i;
    const regexTextoNoVacioDir = /^[a-zñáéíóú\/ ]+$/i;
    
    const nombreConcesionario = document.getElementById("nombreConcesionario").value;
    const direccion = document.getElementById("direccion").value;
    const ciudad = document.getElementById("ciudad").value;
    
    if (!regexTextoNoVacio.test(nombreConcesionario)) {
        ventanaDeError("Apellido no valido");
        comprobacion = false;
    }
    if (!regexTextoNoVacioDir.test(direccion)) {
        ventanaDeError("Direccion no valida");
        comprobacion = false;
    }
    if (!regexTextoNoVacio.test(ciudad)) {
        ventanaDeError("Ciudad no valida");
        comprobacion = false;
    }
    
    const provincia = document.getElementById("provincia");
    if (provincia.selectedIndex == 0) {
        ventanaDeError("Provincia no valida");
        comprobacion = false;
    }
    
    const codigo = document.getElementById("codigoPostal").value;
    const regexCodigoPostal = /^[0-9]{5}$/;
    if (!regexCodigoPostal.test(codigo)) {
        ventanaDeError("Codigo postal no valido");
        comprobacion = false;
    }
    
    const telefono = document.getElementById("telefono").value;
    const regexTelefono = /^[769]{1}[0-9]{8}$/;
    if (!regexTelefono.test(telefono)) {
        ventanaDeError("Telefono no valido");
        comprobacion = false;
    }
    
    const correo = document.getElementById("email").value;
    const regexCorreo = /[a-zA-Z0-9_(-).]+[\@]{1}[a-zA-Z0-9_(-)]+[\.]{1}[a-zA-Z]{2,4}/;
    if (!regexCorreo.test(correo)) {
        ventanaDeError("Correo no valido");
        comprobacion = false;
    }
    
    
    const fecha = document.getElementById("fechaEntrega").value;
    const regexFecha = /([0-9]{2}[\/]{1}){2}[0-9]{4}/;
    if (!regexFecha.test(fecha)) {
        ventanaDeError("Formato de fecha no valida (dd/mm/yyyy)");
        comprobacion = false;
    }

    const date1 = new Date(parseInt(fecha.substring(6, 12)), parseInt(fecha.substring(3, 5))-1, parseInt(fecha.substring(0, 2)));
    
    if ((date1 - new Date()) < 0) {
        ventanaDeError("Fecha incorrecta, tiene que ser posterior a la fecha actual");
        comprobacion = false;
    }
   

    if (!comprobacion) {
        return false;
    }

    // si pasas todos los filtros, crear ventana
    let ventana = window.open("","nombre","height="+heightVent+", width="+widthVent);
    ventana.moveTo(screen.width/2 - widthVent/2, screen.height/2 - heightVent/2);

    // ventana.document.body.innerHTML = "";
    ventana.document.write("<title>Confirmacion</title>");

    ventana.document.write("<h1>Compra a realizar</h1>");
    ventana.document.write("<ul>");
    for (let i = 0; i < coches.length; i++) {
        ventana.document.write("<li>");
        ventana.document.write(toStringCoche(coches[i]));
        ventana.document.write("</li>");
    }
    ventana.document.write("</ul>");

    ventana.document.write("<h1>Datos</h1>");
    ventana.document.write("<h3> nombre: "+nombreConcesionario+"</h3>");
    ventana.document.write("<h3> direccion: "+direccion+"</h3>");
    ventana.document.write("<h3> ciudad: "+ciudad+"</h3>");
    ventana.document.write("<h3> provincia: "+provincia.options[provincia.selectedIndex].innerText+"</h3>");
    ventana.document.write("<h3> codigo: "+codigo+"</h3>");
    ventana.document.write("<h3> telefono: "+telefono+"</h3>");
    ventana.document.write("<h3> correo: "+correo+"</h3>");
    ventana.document.write("<h3> fecha de llegada: "+date1+"</h3>");

    ventana.document.write("<input type='button' value='confirmar' onclick='alert(\"compra realizada\"); window.close()'>")
    ventana.document.write("<input type='button' value='cancelar'  onclick='alert(\"cancelado\"); window.close()'>")

    return true;
}

function toStringCoche(coche) {
    let str = "";


    str += "Motor de " + coche[1];

    str += ", modelo: " + coche[2];
    if (coche[5] == true) {
        str += " con DVD";
    }else {
        str += " sin DVD";
    }
    
    str += ", Color: " + coche[3];
    if (coche[4] == true) {
        str += " metalizado";
    }
    
    str += " - Total: " + coche[0] + "€";

    return str;
}

function ventanaDeError(mensaje) {
    
    // ventana.document.body.innerHTML = "";
    // si pasas todos los filtros, crear ventana
    let ventana = window.open("","nombre","height="+heightVent+", width="+widthVent);
    ventana.moveTo(screen.width/2 - 100, screen.height/2 - 100);
    ventana.document.write("<title>Datos no validos</title>");
    ventana.document.write("<br>");
    ventana.document.write("<h3>"+mensaje+"</h3>");
}