<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>
		<meta charset = "UTF-8">
		<script type = "text/javascript" src = "js/cargarDatos.js"></script>		
		<script type = "text/javascript" src = "js/sesion.js"></script>				
	</head>	
	<body>		
		<section id = "login">
			<form onsubmit="return login()" method = "POST">
				Usuario	<input id = "usuario" type = "text">			
				Clave	<input id = "clave" type = "password">					
				<input type = "submit">
			</form>
		</section>
		<section id = "principal" style="display:none">
			<header>
				<?php require 'cabecera_json.php' ?>
			</header>
			<h2 id = "titulo"></h2>
			<section id = "contenido">			
			</section>


			<style>
				#carrito_permanente{
					position: fixed;
					top: 0;
					right: 0;
					width: 30%;
					height: 100%;
					background-color: #f0f0f0;
					border-left: 1px solid #000;
					padding: 10px;
				}
			</style>
			<section id="carrito_permanente">
				<h3 id="titulo_preview">Carrito actual</h3>
			</section>
		</section>	
		
	</body>
</html>
