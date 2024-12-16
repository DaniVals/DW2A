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

function anadirVehiculo() {
    alert('Vehículo añadido al pedido');
}

function enviarPedido() {
    alert('Pedido enviado');
}