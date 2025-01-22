<?php
	$alumno = $_REQUEST['alumno'];
	$xml="<?xml version=\"1.0\"?>\n";
	switch ($alumno){	
		case '1':
					$xml.="<alumno>\n";
					$xml.="<calificacion materia='Matematicas' nota='8'></calificacion>\n";
					$xml.="<calificacion materia='Lenguaje' nota='6.5'></calificacion>\n";
					$xml.="</alumno>\n";
					break;
		case '2':
					$xml.="<alumno>\n";
					$xml.="<calificacion materia='Matematicas' nota='4'></calificacion>\n";
					$xml.="<calificacion materia='Lenguaje' nota='9'></calificacion>\n";
					$xml.="</alumno>\n";
					break;
	}
	header('Content-Type: text/xml');
echo $xml;
?>

