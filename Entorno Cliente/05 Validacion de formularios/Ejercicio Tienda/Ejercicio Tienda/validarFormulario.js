var arrayPedidos = [];

const widthVent = 500;
const heightVent = 900;

function validarFormulario() {
    
    let comprovacion = true;

    const regexTextoNoVacio = /^[a-zñáéíóú ]+$/i;
    
    const apellidos = document.getElementById("apellidos").value;
    const nombre = document.getElementById("nombre").value;
    const direccion = document.getElementById("direccion").value;
    
    if (!regexTextoNoVacio.test(apellidos)) {
        ventanaDeError("Apellido no valido");
        comprovacion = false;
    }
    if (!regexTextoNoVacio.test(nombre)) {
        ventanaDeError("Nombre no valido");
        comprovacion = false;
    }
    if (!regexTextoNoVacio.test(direccion)) {
        ventanaDeError("Direccion no valida");
        comprovacion = false;
    }
    
    const provincia = document.getElementById("provincia");
    if (provincia.selectedIndex == 0) {
        ventanaDeError("Provincia no valida");
        comprovacion = false;
    }
    
    const codigo = document.getElementById("codigo").value;
    const regexCodigoPostal = /^[0-9]{5}$/;
    if (!regexCodigoPostal.test(codigo)) {
        ventanaDeError("Codigo postal no valido");
        comprovacion = false;
    }
    
    const telefono = document.getElementById("telefono").value;
    const regexTelefono = /^[769]{1}[0-9]{8}$/;
    if (!regexTelefono.test(telefono)) {
        ventanaDeError("Telefono no valido");
        comprovacion = false;
    }
    
    const correo = document.getElementById("email").value;
    const regexCorreo = /[a-zA-Z0-9_(-).]+[\@]{1}[a-zA-Z0-9_(-)]+[\.]{1}[a-zA-Z]{2,4}/;
    if (!regexCorreo.test(correo)) {
        ventanaDeError("Correo no valido");
        comprovacion = false;
    }
    
    const terminos = document.getElementById("terminos");
    if (terminos.checked != true) {
        ventanaDeError("Acepta los terminos y condiciones");
        comprovacion = false;
    }
    
    const fecha = document.getElementById("fecha").value;
    const regexFecha = /([0-9]{2}[:]{1}){2}[0-9]{4}/;
    if (!regexFecha.test(fecha)) {
        ventanaDeError("Formato de fecha no valida (dd:mm:yyyy)");
        comprovacion = false;
    }

    const date1 = new Date(parseInt(fecha.substring(6, 12)), parseInt(fecha.substring(3, 5))-1, parseInt(fecha.substring(0, 2)));
    
    if ((date1 - new Date()) < 0) {
        ventanaDeError("Fecha incorrecta, tiene que ser posterior a la fecha actual");
        comprovacion = false;
    }
    /*

    // como se mira el pago??
    const fpago1 = document.getElementById("fpago1");
    
    */

    if (!comprovacion) {
        return false;
    }
    
    // si pasas todos los filtros, crear ventana
    let ventana = window.open("","nombre","height="+heightVent+", width="+widthVent);
    ventana.moveTo(screen.width/2 - widthVent/2, screen.height/2 - heightVent/2);

    // ventana.document.body.innerHTML = "";
    ventana.document.write("<title>Confirmacion</title>");

    ventana.document.write("<h1>Compra a realizar</h1>");
    ventana.document.write("<ul>");
    for (let i = 0; i < arrayPedidos.length; i++) {
        ventana.document.write("<li>");
        ventana.document.write(arrayPedidos[i][0] + " - " + (arrayPedidos[i][1] * arrayPedidos[i][2]));
        ventana.document.write("</li>");
    }
    ventana.document.write("</ul>");

    ventana.document.write("<h1>Datos</h1>");
    ventana.document.write("<h3> Apellidos: "+apellidos+"</h3>");
    ventana.document.write("<h3> nombre: "+nombre+"</h3>");
    ventana.document.write("<h3> direccion: "+direccion+"</h3>");
    ventana.document.write("<h3> codigo: "+codigo+"</h3>");
    ventana.document.write("<h3> telefono: "+telefono+"</h3>");
    ventana.document.write("<h3> correo: "+correo+"</h3>");
    ventana.document.write("<h3> provincia: "+provincia.options[provincia.selectedIndex].innerText+"</h3>");
    ventana.document.write("<h3> provincia: "+provincia.options[provincia.selectedIndex].innerText+"</h3>");
    
    return false;
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


function anadirLinea() {
    const selectProductos   = document.getElementById("producto");
    const cantidadProductos = document.getElementById("cantidad");

    arrayPedidos.push([
        selectProductos.options[selectProductos.selectedIndex].innerText,
        selectProductos.value,
        cantidadProductos.value
    ]);

    // DEBUG
    console.log(arrayPedidos);
    
    selectProductos.selectedIndex = 0;
}

function convertirMayusculas(id) {    
    document.getElementById(id).value = document.getElementById(id).value.toUpperCase();
}