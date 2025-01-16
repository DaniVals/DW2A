<?php
$autonomia=$_REQUEST['autonomia'];

switch ($autonomia){
	case 'cantabria':
		echo 'Cantabria';
		break;
	case 'galicia':
		echo 'La Coruña, Lugo, Orense, Pontevedra';
		break;
	case 'asturias':
		echo 'Oviedo';
		break;
	case 'pais_vasco':
		echo 'Alava, Guipuzcoa, San Sebastian';
		break;
}
?>