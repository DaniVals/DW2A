
# Arrays
Un array es una variable que guarda diferentes variables en sus posiciones, accediendo a ellas a traves de su **índex**, este se suele juntar con bucles `for`, ya que su longitud no suele ser modificado a menudo
En JS la longitud del array **NO** es fija, por lo que se puede
Se puede usar `console.log(nombre_array)` directamente pare ver el array y su contenido en la consola


## Declarar un array
```js
var nombre_array = new Array(/* longitud del array */);
var nombre_array = []; 
```

**Dos dimensiones**
```js
var nombre_array = new Array(new Array(2), new Array(4), new Array(3));
/* Se crea el array de dos dimensiones con arrays que su longitud no coincide
Esto es valido y se veria asi:

■ ■
■ ■ ■ ■
■ ■ ■
```
## Acceder a una posición
Se escribe el nombre de la variable del array y seguidamente un `[]` con el índex del valor al que queramos acceder
```js
var nombre_array = new Array("texto 1", "texto 2")

nombre_array[0] // devuelve "texto 1"
nombre_array[1] // devuelve "texto 2"
```

## Atributos de un array

### lenght
Este valor devuelve la longitud del array, ten en cuenta que aunque el index empiece por 0, este valor empieza por uno.
```js
var nombre_array = new Array("texto 1", "texto 2")

nombre_array[0] // devuelve "texto 1"
nombre_array[1] // devuelve "texto 2"

nombre_array.lenght // devuelve 2
```

# Funciones de arrays
Una lista con funciones ya existentes específicamente para facilitar el uso de arrays.
Ten en cuenta que hay algunas funciones que **sobre escriben y modifican** el array y otras que no, aquí lo especificare al mencionar la función, pero tenlo en cuenta al buscar otras funciones por Internet

Para mejor comprensión y organización, los he separado en dos categorías inventadas por mi:
- **Funciones activas** que se centran en devolver o modificar partes del array, para facilitar su gestión.
- **Funciones comparativas** que se centran en comprobar el array, perfecto para usarse en un `if`

## Funciones activas
### concat
**Devuelve** el primer array con la segunda cadena al final

```js
let array1 = ['a','b','c'];
let array2 = ['d','e','f'];
let arrayDevuelto = []; // Array donde vamos a guardar el resultado

// Usando dos arrays
arrayDevuelto = array1.concat(array2);
// array1 y array2  NO se modifican
// arrayDevuelto == ['a','b','c','d','e','f']


// Escribiendo directamente los parametros
arrayDevuelto = array1.concat('h','i','j');
// array1 NO se modifica
// arrayDevuelto == ['a','b','c','h','i','j']

```

### join
**Devuelve** los elementos de un array en una cadena de texto.
Permite usar un _delimitador_ (una cadena de texto) para separar los elementos.
Básicamente es un `toString()`

```js
let array1 = ['a','b','c'];
let textoDevuelto; // String donde vamos a guardar el resultado

// sin especificar un delimitador, por defecto usa ","
textoDevuelto = array1.join();
// array1 NO se modifica
// textoDevuelto == "a,b,c"
//      todo en la misma cadena de texto

  
// usando un delimitador personalizado
textoDevuelto = array1.join(" - ");
// textoDevuelto == "a - b - c"

// si se quiere evitar la "," se puede hacer esto
textoDevuelto = array1.join("");
// textoDevuelto == "abc"


```

### reverse
Le da la vuelta a un array y lo **sobre escribe**

```js
let array1 = ['a','b','c'];

// array1 == ['a','b','c']
array1.reverse();
// array1 == ['c','b','a']
```

### pop
**Elimina** el ultimo elemento de un array, y este se puede guardar en una variable

```js
let array1 = ['a','b','c'];
let valorDevuelto; // Variable donde vamos a guardar el resultado

// SIN guardar el valor
array1.pop();
// array1 == ['a','b']

// guardando el valor
valorDevuelto = array1.pop();
// array1 == [a]
// valorDevuelto == 'b'
```

### push
**Añade** un elemento al final del array
Devuelve la nueva longitud del array
```js
let array1 = ['a','b','c'];
let intDevuelto; // Numero donde vamos a guardar el resultado

// array1 == ['a','b','c']
intDevuelto = array1.push('d');
// array1 == ['a','b','c','d']
// intDevuelto = 4;
```

### shift
**Elimina** el primer elemento de un array, y este se puede guardar en una variable
Similar a [[Arrays JS#pop | pop]], pero al principio
```js
let array1 = ['a','b','c'];
let valorDevuelto; // Variable donde vamos a guardar el resultado

// SIN guardar el valor
array1.shift();
// array1 == ['b','c']

// guardando el valor
valorDevuelto = array1.shift();
// array1 == [c]
// valorDevuelto == 'b'
```

### unshift
**Añade** un elemento al principio del array
Similar a [[Arrays JS#push| push]], pero al principio
Devuelve la nueva longitud del array
```js
let array1 = ['a','b','c'];
let intDevuelto; // Numero donde vamos a guardar el resultado

// array1 == ['a','b','c']
intDevuelto = array1.push('z');
// array1 == ['z','a','b','c']
// intDevuelto = 4;
```


### slice
### splice
### sort


## Funciones comparativas

### foreach
### every
### filter
### find
### findIndex
### some