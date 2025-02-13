<?php
header("Content-Type: application/json; charset=UTF-8");

// para replicar la BBDD
$cantantes = array();
$cantantes[] = [
	"nombre" => "---"
];
$cantantes[] = [
	"nombre" => "Dani Martin",
	"foto" => "https://pbs.twimg.com/media/Fe34r9gXgAAoETC.png",
	"canciones" => [
		[
			"titulo" => "Otra Piel",
			"ano" => 2003
		],
		[
			"titulo" => "Guerra Fria",
			"ano" => 2010
		]
	]
];
$cantantes[] = [
	"nombre" => "Sebastian Yatra",
	"foto" => "https://images.genius.com/c3f8df1cb6ca65f80a237d8a3f40fb19.785x785x1.png",
	"canciones" => [
		[
			"titulo" => "Una Piel",
			"ano" => 2005
		],
		[
			"titulo" => "Guerra Caliente",
			"ano" => 2020
		]
	]
];

// lo que va a devolver
$returned = array();

if (!isset($_GET["cantante"])) {
	for ($i=0; $i < count($cantantes); $i++) {
		$returned[] = $cantantes[$i]["nombre"];
	}
}else {
	$cantante = $_GET["cantante"];
	for ($i=0; $i < count($cantantes); $i++) {
		if ($cantante == $cantantes[$i]["nombre"]) {
			$returned = $cantantes[$i];
		}
	}
}

echo json_encode($returned);