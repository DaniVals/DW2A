<!DOCTYPE html>
<html>
<!-- 
    4. Crea un desplegable que muestre todos los equipos de la BD. Si se selecciona uno y se pulsa el submit del formulario, 
    se mostrarán los datos de sus jugadores con la opción de borrar cada uno.
 -->
<body>
    <select id="select_jugador" onchange="cargarJugadores()">
        <option value="0">Selecciona un equipo</option>
        <?php
        require_once "bootstrap.php";
        require_once './src/Equipo.php';
        $equipos = $entityManager->getRepository('Equipo')->findAll();
        foreach ($equipos as $equipo) {
            echo "<option value='{$equipo->getId()}'>{$equipo->getNombre()}</option>";
        }
        ?>
    </select>

    <p id="nombre"></p>
    <p id="fundacion"></p>
    <p id="socios"></p>
    <p id="ciudad"></p>

</body>
<script>
function cargarJugadores() {
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var equipo =  JSON.parse(this.responseText);
            
            document.getElementById('nombre').innerText = "Nombre: " + equipo.nombre;
            document.getElementById('fundacion').innerText = "Fundación: " + equipo.fundacion;
            document.getElementById('socios').innerText = "Socios: " + equipo.socios;
            document.getElementById('ciudad').innerText = "Ciudad: " + equipo.ciudad;
		}
	};

    let id = document.getElementById('select_jugador').value;

	xhttp.open("GET", "04-2.php?id="+id , true);
	xhttp.send();
	return false;
}
</script>
</html>


