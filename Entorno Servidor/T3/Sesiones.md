# Sesiones
HTTP es un protocolo *sin estado*, necesitas cosas externas como las cookies para saber si ya ha hecho algo.
Para eso usamos las **sesiones**
NO son las sesiones de *Twitter* por ejemplo, sino es para guardar variables, aunque si se usan para ese tipo de sesión

Una sesión es información que se guarda en **servidor** sobre tu navegador, el navegador guarda automáticamente una **cookie** (que caduca a los 30 mins) con la ID de tu sesión (cuando se usa) para evitar conflictos de IPs, pero la información de la propia sesión solo se guarda en servidor

## Como usar las sesiones
cada pagina que vaya a usar sesiones hay que poner esto **SIEMPRE**
```php
// abrir la sesion (HAY QUE PONERLO SIEMPRE)
session_start();

// guardar un valor en la sesion
$_SESSION["email"] = "dani@educa.org";

// sacar un valor
echo $_SESSION["email"];

// cerrar sesion
session_destroy();
```
cuando se borra la cookie o se destruye la sesión, se borran los datos de esta