# Métodos de acceso


## HTTP


| verbo | Recurso    | Versión  | 
| ----- | ---------- | -------- |
| GET   | index.html | HTTP/1.1 |


# Tipos de acceso



## GET

Es la opción por defecto
- URL / direcciones
- pinchar un enlace
- [redirección](#Redirección)
- **NO** usar formulario de GET (se ven los parámetros, poca seguridad)

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

Una vez a respondido a un formulario 
- mucho mas seguro
- se tiene que especificar en ``<form>``

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
echo "Usuario: " . $_POST["usuario"];
echo "Clave: " . $_POST["contra"];
```




>[!warning] Cuidado
>No todos los inputs devuelven algo en todos los casos
>- Un "checkbox" devuelve true si se marca pero **NO** devuelve nada si se deja en blanco
>- Un string vacio devuelve un string con el contenido ""
>- Para enviar un fichero con y usarlo en `$_FILES` hay que añadir a la etiqueta `<form enctype>`

### Como enviar ficheros 
Se envia un fichero con 
```html
<input type="file" name="valor_fichero">
```
Hay que añadir la forma de encriptacion al formulario 
```html
 <form enctype="multipart/form-data">
```
Se accede con la variable 
```php
$_FILES["valor_fichero"]
``` 
Valores de un fichero
```php
echo ["name"];
echo ["type"];
echo "Donde esta el fichero: " . ["tmp_name"] . " (este se borra cuando acaba el programa)";
```
Ya que cuando el programa borra el fichero cuando acaba el script, se puede cambiar el fichero de lugar antes de que lo borre.
```php
move_uploaded_file($_FILES["valor_fichero"]["tmp name"] , "./" . $_FILES["valor_fichero"]["name"]);
```


# GET y POST
Podemos usar ambos tipos de acceso en el mismo archivo.php detectando si el usuario a entrado desde un enlace o ya ha completado el formulario usando un simple ``if``
```php
<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		// cuando abre la pagina a traves de un enlace o una URL
?>

    <form action="" method="POST">
        Valor: <input type="text" name="valor"><br>
        <select name="conversion">
            <option value="CaF">Celsius a Fahrenheit</option>
            <option value="FaC">Fahrenheit a Celsius</option>
        </select>
        <input type="submit">
    </form>
    
<?php
	} else {
		// cuando abre la pagina al responder al fomulario
	}
?>
```

### Redirección
```php
header("Location: hhtps://www.ejemplo.com");
```
