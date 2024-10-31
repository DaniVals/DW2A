<?php 
    /*
    3. Añade a la página de login un enlace que permita registrarse a nuevos usuarios y crea esta página. 
    La contraseña tiene al menos una mayúscula, una minúscula y un número. 
    Los usuarios no pueden quedar registrados como administradores.
    */

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        ?>
            <h2>Crear una cuenta</h2>
            <form method="POST">
                Nuevo Usuario: <input type="text" name="usuario"><br>
                Nueva contraseña: <input type="text" name="contra"><br>
                <input type="submit">
            </form>
            
        <?php
            } else {       
        
                $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
                $usuario = 'root';
                $clave = '';
        
                try {
                    session_start();
                    $bd = new PDO($cadena_conexion, $usuario, $clave);

                    // Select para ver si ya existe
                    // $sql = 'SELECT nombre FROM usuarios WHERE nombre="' . $_POST['usuario'] . '"';
                    // $usuarios = $bd->query($sql);

                    // if (0 == count($usuarios)) {
                        $sql = 'INSERT INTO usuarios(nombre, clave, rol) values("'.$_POST['usuario'].'",'.$_POST['contra'].', 1)';
                        $bd->query($sql);

                        echo 'Cuenta creada con exito';
                    // }else{
                    //     echo 'Ese nombre ya existe';
                    // }

                } catch (PDOException $e) {
                    // reiniciar la pagina con un error friendly user
                    echo 'Error con la base de datos: ' . $e->getMessage();
                }
            }
        ?>