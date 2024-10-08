
# Que es JavaScript
Se ejecuta en el navegador
El código que esta "suelto" se ejecuta en el momento en el que se carga el archivo

# Variables
Se puede definir una variable de dos formas

(tienen tipo oculto no tipado (poner bonito))

### var
Declarar una variable con **``var``** permite usar esa variable en todo el programa, se usa para variables globales que serán muy usadas durante el programa
```js
var variableGlobal;
```

### let
Declarar una variable con **``let``** permite usar esa variable en UNICAMENTE en el bloque donde se declaro, se usa para variables momentáneas ya que al acabar dicho bloque se liberan de la memoria RAM
```js
let variablePrestada;
```


### const
aunque esto no sea una variable por si misma, también son  muy usadas las **constantes**, para definir valores que no van a cambiar durante el programa de forma mas legible y cómoda

> [!error] Mal
> ```js
> // que significa 0? que es 10? y si luego cambia a 15 lo tengo que cambiar en varios sitios
> if(0 < variable && variable < 10)
> ```

> [!done] Bien
> ```js
> const VALOR_MINIMO = 0;
> const VALOR_MAXIMO = 10;
> // sabes que estas comparando y si quieres cambiar el valor y este se usa varias veces, lo puedes modificar de forma cómoda
> if(VALOR_MINIMO < variable && variable < VALOR_MAXIMO)
> ```

# Controladores de flujo
- [ ] E. Cliente: TODO controladores de flujo
### if 

### while

### for

# Funciones
### Qué es una función
Es un bloque de código que se ejecuta cuando se es necesitado, facilitando  la lectura del código, pudiendo usar parámetros para mayor flexibilidad al usar una función y devolver valores calculados en esta

### Por qué usar una función
Para evitar ejecutar código nada mas cargar el archivo, tener el código mas limpio y reutilizable o ejecutar eventos de forma mas cómoda

### Cómo usar una función
Hay que escribir **function** y luego el nombre separado por un espacio, después unos paréntesis con los parámetros de la función y unas llaves para indicar el bloque de código:
```js
function nombre(parametro) {
	// bloque de codigo
}
```

Para devolver un valor a traves de una función usamos **return**:
```js
function sumar(numero1, numero2) {
	// sumar dos numeros y guardarlos en una variable
	let suma = numero1 + numero2;
	
	// devolver el valor de la suma
	return suma;
}
```
