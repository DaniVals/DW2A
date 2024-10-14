# Que es una cookie?
Una **cookie** es una `[varaible creo]` que guarda información en tu navegador sobre diferentes paginas web.

- [ ] E. servidor preguntar que es una cookie

## Cuando usar una cookie?
Ya que el **usuario las puede modificar** si quiere, no se debe usar para información critica, solo para cosas secundarias, como el idioma o si usar el modo claro o el modo oscuro.

# Como usar una cookie?
Aquí veremos ejemplos de como usar las cookies en **php**, también vamos a usar el [cookie-editor](https://cookie-editor.com) para ver y modificar las cookies de nuestro navegador de forma cómoda, muy útil para **debug**. 
Se puede ver cuando caduca una cookie cuando le das a *Show advance*

>[!caution] Ten en cuenta!
>Cuando **declaras** o **modificas** una cookie **NO** la puedes usar en esa misma *interpretación* de php, ya que hasta que no muestra la pagina no crea ni modifica el valor de esta.
>Se puede arreglar con este bloque de código
>```php
>//crear una variable con el valor por defecto
>$variable_cookie = 123;
>if (!isset($_COOKIE["nombre_cookie"])) {
>	// si la cookie no existe, la creamos con el mismo valor por defecto
>	setcookie("nombre_cookie", 123, time()+3600);
>
>}else{
>	// si existe, remplazamos el valor por el de la cookie
>	$visitas = $_COOKIE["nombre_cookie"];
>}
>```

### CREAR
Usamos la función ``setcookie()`` para crear una cookie, pasándole el **nombre**, el **valor**, y la **fecha de caducidad** (s) de esta.
`time()` -> la fecha actual en **Tiempo Unix**

```php
// guardar una cookie que tiene el valor 123,
// y que caduca en 3600 segundos, o una hora
setcookie("nombre_cookie", 123, time()+3600);
```

>[!info] Que es **Tiempo Unix**?
>Los segundos que han pasado desde el **01-01-1970**

### LEER
Usamos la variable de servidor ``$_COOKIE["nombre_cookie"]`` para acceder al valor de una cookie, escribiendo su nombre en los `[]`.

```php
// comprobar que la variable existe
if (isset($_COOKIE["visitas"])) {
	$_COOKIE["visitas"]
}
```
>[!caution] Ten en cuenta!
>Como dije antes, cuando **modificas** una cookie no modifica el valor de esta hasta que termina la *interpretación*.
>```php
>// la cookie vale 123
>$visitas = $_COOKIE["nombre_cookie"];
>// visitas vale 123 (como se esperaba)
>
> //modificamos el valor de la cookie
>setcookie("nombre_cookie", 321, time()+3600);
>
>// la cookie sigue devolviendo 123
>$visitas = $_COOKIE["nombre_cookie"];
>// visitas vale 123 (ya que hasta que no se reinicia la pagina no se actualiza el valor de la cookie)
>```


### MODIFICAR
Para modificar el valor de una cookie, simplemente usamos `setcookie()` con el mismo nombre de cookie y reescribimos su valor y su fecha de caducidad.
```php
// guardar una cookie que tiene el valor 123
setcookie("nombre_cookie", 123, time()+3600);

// guardar en la misma cookie el valor 456
setcookie("nombre_cookie", 456, time()+3600);
```

### BORRAR
Para borrar una cookie, modificamos la cookie con una fecha de caducidad instantánea (`time()`), para que caduque en ese momento y se elimine.
```php
// borrar una cookie, forzando que caduque instantaneamente
// el valor da igual ya que la vamos a borrar
setcookie("nombre_cookie", 123, time());
```