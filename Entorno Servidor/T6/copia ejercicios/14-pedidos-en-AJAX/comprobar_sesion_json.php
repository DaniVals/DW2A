<?php	
	// ======================================== EJ 5 ========================================
	// (todo el archivo)
	require_once 'sesiones_json.php';
	require_once 'bd.php';	
	if(!comprobar_sesion()) return;
    
	$array = array();

	// TODO sacar rol de la BBDD
	$rol = 1;

	// si no es rol 1, no meter nada al array
	if ($rol == 1) {
		echo "<p>Eres admin</p>";
		echo "god no?";
	}else {
		echo "No puedes acceder a esta pagina";
	}
	