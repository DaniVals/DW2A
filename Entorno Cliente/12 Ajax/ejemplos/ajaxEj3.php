<?php
	$alumno = $_REQUEST['alumno'];
	$materia = $_REQUEST['materia'];
	switch ($alumno){
		case 'Juan Felix Mateos':
			switch ($materia){
				case 'Matematicas':
					echo '7.5';
					break;
				case 'Lenguaje':
					echo '6.5';
					break;
			}
			break;
		case 'Ana Irene Palma':
			switch ($materia){
				case 'Matematicas':
					echo '8.5';
					break;
				case 'Lenguaje':
					echo '9.5';
					break;
			}
			break;
	}
?>
