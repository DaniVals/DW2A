<?php
$nombre = $_REQUEST['nombre'];	
$lista=['Pilar','Raul','Ana'];
	
$xml="<?xml version=\"1.0\"?>\n";

$xml.="<respuesta>\n";
// if que diga si esta cogido o no
if (in_array($nombre, $lista)){
	$xml.="<disponibilidad>no</disponibilidad>\n";

	$xml.="<nombresNuevos>\n";
	$xml.="<nombre>123". $nombre ."</nombre>\n";
	$xml.="<nombre>". $nombre ."Bis</nombre>\n";
	$xml.="<nombre>". $nombre ."ABC</nombre>\n";
	$xml.="<nombre>". $nombre ."100</nombre>\n";
	$xml.="</nombresNuevos>\n";

}else{
	$xml.="<disponibilidad>si</disponibilidad>\n";
}

$xml.="</respuesta>\n";
header('Content-Type: text/xml');
echo $xml;
?>

