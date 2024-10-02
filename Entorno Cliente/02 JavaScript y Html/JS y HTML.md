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

Ten en cuenta que se puede aplicar cualquier evento a cualquier etiqueta, como usar onload en el body para ejecutar codigo cuando carga la pagina ha cargado
```html
<body onload="funcion()">
```


>[!example]+  **Eventos mas usados**
> - onclick
> - onfocus
> - onblur
> 
> [[INTRODUCCION_A_OBJETOS_Y_EVENTOS.pdf|Lista eventos profesor]]






---
---
---
---
---
---

