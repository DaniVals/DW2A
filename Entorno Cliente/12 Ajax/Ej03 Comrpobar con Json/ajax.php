<?php
$nombre = $_REQUEST['nombre'];	
$lista=['Pilar','Raul','Ana'];
	
$json = array();

// if que diga si esta cogido o no
if (in_array($nombre, $lista)){
	$json['disponibilidad'] = 'no';

	$json['nombresNuevos'] = array();
	$json['nombresNuevos'][] = $nombre . '1';
	$json['nombresNuevos'][] = $nombre . '2';
	$json['nombresNuevos'][] = $nombre . '3';
	$json['nombresNuevos'][] = $nombre . '4';

}else{
	$json['disponibilidad'] = 'si';
}

echo json_encode($json);
?>

