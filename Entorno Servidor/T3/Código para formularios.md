## Acceso a parámetros

### Tipo de acceso
funciona con `GET` y `POST`
```php
$_SERVER["REQUEST_METHOD"] == "GET"
```







## Validar parámetros
#### Todos funcionan con `GET` y `POST`

### Comprobar si existe
```php
isset($_POST["variable"])
```


### Comprobar si esta vacío
```php
empty($_POST["variable"])
```

### Validar cadenas de texto

https://www.php.net/manual/es/filter.filters.php
- [ ] TODO: PHP funciones validar cadenas de texto







## Otros

### Redirigir la pestaña
```php
header("Location: https://www.ejemplo.com");
```