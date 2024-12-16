<?php
require_once "vendor/autoload.php";
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

// Conexión a la base de datos
$parametros_conexion = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'doctrine',
	'host'     => 'localhost',
];
$conexion = DriverManager::getConnection($parametros_conexion);

// Configuración de Doctrine para que use atributos a la hora de procesas las entidades
$rutas_a_entidades  = ["./src"];
$depuracion_activa  = true;
$config = ORMSetup::createAttributeMetadataConfiguration($rutas_a_entidades, $depuracion_activa);

// Creación objeto entityManager
$entityManager = new EntityManager($conexion, $config);
