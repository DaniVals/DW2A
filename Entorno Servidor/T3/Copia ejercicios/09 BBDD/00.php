<?php 
    /*
    0. Crea una página que reciba como parámetro de la URL un código de usuario y muestre toda su información. 
    Ejemplo: http://localhost/ejercicio1.php?usuario=14 debería mostrar la información del usuario 14.
    */
    
    $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
    $usuario = 'root';
    $clave = '';

    try {
        $bd = new PDO($cadena_conexion, $usuario, $clave);		
        
        // Select
        $sql = 'SELECT nombre, clave, rol FROM usuarios WHERE codigo=' . $_GET['usuario'];
        $usuarios = $bd->query($sql);
        
        // debug
        // echo "Número de usuarios: " . $usuarios->rowCount() . "<br>";

        // mostrar datos
        foreach ($usuarios as $usu) {
            echo "Nombre : " . $usu['nombre'];
            echo " - Clave : " . $usu['clave'] . "<br>";
        }
    
    } catch (PDOException $e) {
        echo 'Error con la base de datos: ' . $e->getMessage();
    }




?>

