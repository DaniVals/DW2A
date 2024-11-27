<!DOCTYPE html>
<html>
	<head>
		<title>Hora en el servidor</title>		
		<meta charset = "UTF-8">
		<script>
			function loadDoc() {
				var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
						// Si el objeto ha acabado
						if (this.readyState == 4 && this.status == 200) {
							let resultado = JSON.parse(this.response);
							
							zonaescritura.innerHTML = "Hola " + resultado.nombre 
								+ " tienes " + resultado.edad;
						}
				};
				xhttp.open("GET", "hora_servidor.php", true);
				xhttp.send();
				return false;
			}
		</script>
	</head>	
	<body>
			<button onclick="loadDoc()">Pulsa aquí</button>
			<div id="zonaescritura"></div>
	</body>	
</html>