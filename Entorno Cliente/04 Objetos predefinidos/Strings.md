# Strings

[recurso de la profe de w3schools](https://www.w3schools.com/jsref/jsref_obj_string.asp)

Son muy parecidos a un [[Arrays JS| array]], de hecho, una cadena de texto se podría decir que es un array de caracteres

## Propiedades
### lenght
Devuelve la longitud de la cadena, igual que un array, ten cuidado que empieza en la posición 0 pero la longitud empieza por el 1. Ejemplo:

```js
let texto = "txt";

texto[0] // devuelve 't'
texto[1] // devuelve 'x'
texto[2] // devuelve 't'

texto.length // devuelve 3
```

# Funciones
### chatAt
se puede hacer con corchetes como un array o usar la función ``charAt(posicion)``, por seguridad, es mejor usar *charAt* cuando solo necesites **leer**, ya que devuelve el valor, cuando usar corchetes
```js
let texto = "txt";

texto[0] // devuelve 't'
texto.charAt(0) // devuelve 't'

texto[0] = '1' // no hace nada
texto.charAt(0) = '2' // da ERROR
```

### indexOf
**Devuelve** la posicion 
```js
let texto = "texto1,texto2,texto3";

let arrayTextos = texto.split(",") // indicamos la , como el separador
// arrayTextos = ["texto1" , "texto2" , "texto3"]

// no tiene que ser un solo caracter
let texto = "texto1separaciontexto2separaciontexto3";

let arrayTextos = texto.split("separacion") // indicamos separacion como el separador
// arrayTextos = ["texto1" , "texto2" , "texto3"]
```

### split
**Devuelve** un array con los elementos de una cadena de texto separados por un separador (que es otra cadena de texto)
```js
let texto = "texto1,texto2,texto3";

let arrayTextos = texto.split(",") // indicamos la , como el separador
// arrayTextos = ["texto1" , "texto2" , "texto3"]

// no tiene que ser un solo caracter
let texto = "texto1separaciontexto2separaciontexto3";

let arrayTextos = texto.split("separacion") // indicamos separacion como el separador
// arrayTextos = ["texto1" , "texto2" , "texto3"]
```

### slice / substring