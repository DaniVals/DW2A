# Como incorporar JS a un HTML


### Usando la etiqueta link
```html
<link rel="script" href="archivo_externo.js"> 
```
```js
/* El archivo referenciado */
function saludar(){
	console.log("Hola mundo")
}
```

### Usando la etiqueta 
```html
<script>
function saludar(){
	console.log("Hola mundo")
}
</script>
```

### En la etiqueta
```html
<p nombreevento="console.log('Hola mundo')"> Texto rojo </p>
```

# Funciones de HTML

### alert
muestra un panel de información en el navegador
```js
alert('Mensaje de la pagina')
```

### prompt
pide un dato por teclado al usuario
```js
var texto_por_teclado = prompt('Mensaje de la pregunta')
```





# Eventos
Aunque en JS el código escrito directamente se ejecuta nada mas cargar el archivo, se puede ejecutar código en momentos específicos gracias a los **eventos**

Un evento es un atributo que llama al código dentro del atributo cuando ocurre dicho evento a dicha etiqueta

```html
<button onclick="pulsarBoton()">pulsa aqui</button>
<!-- Ejemplo, hacer click en el boton y llama a la funcion -->
```

Ten en cuenta que se puede aplicar cualquier evento a cualquier etiqueta, como usar onload en el body para ejecutar código cuando carga la pagina ha cargado
```html
<body onload="funcion()">
```


>[!example]+  **Eventos mas usados**
> - onclick
> - onfocus
> - onblur
> 
> [[INTRODUCCION_A_OBJETOS_Y_EVENTOS.pdf|Lista eventos profesor]]

# Acceder al HTML
## Referenciar una etiqueta
Ahora que sabemos reaccionar al HTML, podemos acceder a sus etiquetas de varias formas y usar sus atributos.
### ID
La mas común, accede a la etiqueta con esa id
```js
var elemento = document.getElementById("nombre_id")
```

## Modificar una etiqueta

Para acceder a atributos y funciones de una etiqueta, se escribe esta tras un punto
### value
La más usada
El contenido interno de una etiqueta, como el texto de un párrafo
También es la opción elegida en una etiqueta de tipo ```<input>```
```js
elemento.value = "nuevo texto para un parrafo";

var numero = inputNumerico.value;
```
### style
Los atributos de estilo de dicha marca
```js
// añadir o sustituir una propiedad CSS
elemento.style.setProperty("background-color","red");
```
