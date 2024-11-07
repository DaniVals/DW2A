var arrayPedidos = [];

function validarFormulario() {
    
    const regexTextoNoVacio = /^[a-zA-Z]+$/;
    
    const apellidos = document.getElementById('apellidos').value;
    const nombre = document.getElementById('nombre');
    const direccion = document.getElementById('direccion');
    const provincia = document.getElementById('provincia');
    if (!apellidos.matches(regexTextoNoVacio)) {
        return false;
    }
    if (!nombre.matches(regexTextoNoVacio)) {
        return false;
    }
    if (!direccion.matches(regexTextoNoVacio)) {
        return false;
    }
    if (!provincia.matches(regexTextoNoVacio)) {
        return false;
    }
    
    const codigo = document.getElementById('codigo');
    const regexCodigoPostal = /^[//d]{5}$/;
    if (!codigo.matches(regexCodigoPostal)) {
        return false;
    }
    
    const telefono = document.getElementById('telefono');
    
    const correo = document.getElementById('correo');
    const regexCorreo = /[a-zA-Z0-9_(-).]+[\@]{1}[a-zA-Z0-9_(-)]+[\.]{1}[a-zA-Z]{2,4}/;
    
    const terminos = document.getElementById('terminos');

    // como se mira el pago??
    const fecha = document.getElementById('fecha');
    const fpago1 = document.getElementById('fpago1');




    // si pasas todos los filtros, crear ventana
    let ventana = window.open('nombre',height=200, width=200 );
    ventana.document.title = "Error";
    // ventana.resizeTo(200,200); // no funciona pq esta en pantalla completa
    ventana.document.write("Ventana");

    return true;
}

function anadirLinea() {
    const selectProductos   = document.getElementById('producto');
    const cantidadProductos = document.getElementById('cantidad');

    arrayPedidos.push([
        selectProductos.options[selectProductos.selectedIndex].innerText,
        selectProductos.value,
        cantidadProductos.value
    ]);

    // DEBUG
    console.log(arrayPedidos);
    
    selectProductos.selectedIndex = 0;
}

function convertirMayusculas() {
    console.log("TODO convertir mayusculas el textarea del nombre y del apellido");
    
}