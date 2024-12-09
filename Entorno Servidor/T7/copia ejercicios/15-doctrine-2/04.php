<!DOCTYPE html>
<html>
<!-- 
    4. Prueba la entidad Entrevista creando una página que permita escribir el nombre de un medio (por ejemplo, "BBC News") 
    y muestre los nombres de los jugadores que han hecho una entrevista ahí, 
    junto a la fecha y el nombre del entrevistador.
 -->
<body>
    <input type="text" id="buscador" onchange="cargarJugadores()" value="RNE-">

    <div id="div"></div>

</body>
<script>
function cargarJugadores() {
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {

            const response = JSON.parse(this.responseText);
            document.getElementById('div').innerText = "";
            
            for (let i = 0; i < response.length; i++) {
                const element = response[i];
                
                document.getElementById('div').innerHTML += element;
            }
		}
	};

    let medio_buscado = document.getElementById('buscador').value;

	xhttp.open("GET", "04-2.php?medio_buscado="+medio_buscado , true);
	xhttp.send();
	return false;
}
</script>
</html>


