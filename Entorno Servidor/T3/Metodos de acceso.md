# Métodos de acceso


## HTTP


| verbo | Recurso    | Versión  | 
| ----- | ---------- | -------- |
| GET   | index.html | HTTP/1.1 |


# Tipos de acceso



## GET

URL / direcciones
pincho enlace
redirección
**NO** usar formulario de GET (se ven los parámetros)

### Parámetros
A traves de la URL
``` www.url.com?nombre=valor ```

```php
echo $_SERVER["REQUEST_METHOD"];

// Veo si recibo un parametro de GET
if(isset($_GET["usuario"])) {
	echo "Hola " . $_GET["usuario"];
	
} else {
	echo "No me llega nada";
}
```


## POST

formulario de post (mucho mas seguro y recomendable)

### Parámetros
A traves del servidor, especificando el método post en el formulario
```html
<!-- formulario.php -->

<body>
	<form action="procesar.php" method="POST"> 
	<!-- "action" especificar el archivo al que seras redirijido al pulsar submit -->
		Usuario: <input type="text" name="usuario"><br>
		Clave: <input type="password" name="contra"><br>
		<input type="submit">
	</form>
</body>

```
```php
// procesar.php
echo $_SERVER["REQUEST_METHOD"];
echo "Usuario: " . $_POST["usuario"];
echo "Clave: " . $_POST["contra"];
```

>[!warning] Cuidado
>No todos los inputs devuelven algo en todos los casos
>- Un "checkbox" devuelve true si se marca pero **NO** devuelve nada si se deja en blanco
>- Un string vacio devuelve un string con el contenido ""


