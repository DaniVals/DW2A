# Strings

https://www.w3schools.com/jsref/jsref_obj_string.asp
recurso de la profe

## Propiedades
### lenght

## Funciones
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