>[!quote]+ PDF
>Para crear diseños web profesionales, es imprescindible conocer y dominar los selectores de CSS. Una regla de CSS está formada por una parte llamada "selector" y otra parte llamada "declaración". 
>
>La declaración indica "qué hay que hacer" y el selector indica "a quién hay que hacérselo". 
>
>Por lo tanto, los selectores son imprescindibles para aplicar de forma correcta los estilos CSS en una página. 
>
>A un mismo elemento HTML se le pueden aplicar varias reglas CSS y cada regla CSS puede aplicarse a un número ilimitado de elementos. 
>
>En otras palabras, una misma regla puede aplicarse sobre varios selectores y un mismo selector se puede utilizar en varias reglas. 
>
>El estándar de CSS incluye una docena de tipos diferentes de selectores, que permiten seleccionar de forma muy precisa elementos individuales o conjuntos de elementos dentro de una página web. 
>
>No obstante, la mayoría de las páginas de los sitios web se pueden diseñar utilizando solamente los cinco selectores básicos


# Selectores Básicos

### Universal
Selecciona **TODOS** los elementos de una pagina.
Mas allá de este ejemplo no se usa mucho directamente, pero si se suele combinar con otro tipo de etiquetas.


```CSS
/* Ejemplo quitar el margen y el  a todos*/
* {
	margin:  0px;
	padding: 0px;
}
```

### Tipo o etiqueta
Selecciona **TODAS** las etiquetas.
Se usa bastante para normas generales como el color del texto, el tipo de fuente o atributos generales.


```CSS
/* Ejemplo poner los encabezados centrados y los parrafos en cursiva */
h1 {
	text-align: center;
}
p {
	font-style: italic;
}
```

### Clase
Selecciona las etiquetas que tengan dicha clase añadida en el documento HTML
Al ser mas especifico se usa para varios elementos sueltos que comparten atributos, como destacar textos separados
Se referencia con un punto

```CSS
/* Poner texto de color verde */
.verde {
	color: green;
}
```
```html
<p>normal</p>
<p class="verde">verde</p>
<span>normal <span class="verde">verde</span> normal</span>
<h1 class="verde">verde</h1>
```

**etiqueta con clase**
- [ ] TODO h1.clase

Si tengo un título h1 que pertenece a la clase anuncio para seleccionarlo solo a él escribiré:

Pregunta 11Seleccione una:

a.
h1 .anuncio



b.
h1,anuncio



c.
h1*destacado



d.
h1.anuncio

### ID
Selecciona a **UNA** etiqueta
Se usa para atributos específicos con normas que solo se necesitaran esa vez

```CSS
/* Poner el encabezado con fondo amarillo */
#encabezado_principal {
	background-color: yellow;
}
```
```html
<h1 id="encabezado_principal">TITULO</h1>
<p>normal</p>
```

### Descendente
Selecciona los elementos **DENTRO** de dichos elementos, separados por espacios.
Se pueden amontonar todos los selectores que quieras, siempre y cuando estén separados por espacios.


```CSS
/* Poner los span dentro de un parrafo en negrita */
p span {
	font-weight: bold;
}
```
```html
<p>normal</p>
<p>normal <span>negrita</span></p>
<span>normal</span>
```

### Múltiple
Selecciona los elementos **INDEPENDIENTEMENTE** uno del otro, separados por comas.
Se usa mucho para no repetir código


```CSS
/* Poner los span y los parrafos en negrita */
p, span {
	font-weight: bold;
}
```
```html
<p>negrita</p>
<p>negrita <span>negrita</span></p>
<span>negrita</span>
```





# Selectores Avanzados

### Hijo
Selecciona los elementos **DIRECTAMENTE** dentro del otro, usando el `>`.
```CSS
/* Poner los span directamente dentro de un parrafo en negrita */
p > span {
	font-weight: bold;
}
```
```html
<p>normal <span>negrita</span></p>
<p>normal <a><span>normal</span></a></p>
```


### Adyacente
Selecciona los elementos **SEGUIDOS** del otro, usando el `+`. Solo aplica los estilos al elemento que esta al final
```CSS
/* Poner los span que tienen un parrafo a su izquierda en negrita */
p + span {
	font-weight: bold;
}
```
```html
<p>normal</p>
<span>negrita</span>
<span>normal</span>
```



### Atributos
Selecciona los elementos con esos **ATRIBUTOS** dentro de su etiqueta.
```CSS
/* Poner un enlace que lleva a la pagina 1 de amarillo */
a[href="pagina01.html"] {
	color: yellow;
}
```
```html
<a href="pagina01.html">amarillo</a>
<a href="pagina02.html">normal</a>
```

>[!example]+ Formas de comparar el valor de una etiqueta
>- ``[nombre_atributo]`` tienen establecido ese atributo, **sin importar** el valor.
>- ``[nombre_atributo=valor]`` tienen ese atributo **igual** a ese valor
>- ``[nombre_atributo^=valor]`` el valor del atributo **comienza** por ese valor
>- ``[nombre_atributo$=valor]`` el valor del atributo **acaba** por ese valor
>- ``[nombre_atributo~=valor]`` el valor del atributo tiene **al menos uno** de ese valor 


# Selectores Pseudo-clases
Estas son clases que son un poco mas relativas, estas se indican escribiendo `:` y luego la pseudoclase que se quiera usar, se pueden usar varias a la vez.
```CSS
a:link:hover{ color: green;}
```


## Por posición
Estos se aplican según la posición en la que estén colocadas las etiquetas de HTML

### fisrt-child
Este solo se aplica a los elementos que sean el **PRIMERO** de su contenedor.
Ten en cuenta que hay que poner la etiqueta a la que se va a aplicar, **NO** a la del contenedor
```html
<style>
	/* poner el aplicado (p) no el contenedor (body) */
	p:first-child{
		color: blue;
	}
</style>

<body>
	<p>azul</p>
	<p>normal</p>
	<p>normal</p>
</body>
```

### last-child
Este solo se aplica a los elementos que sean el **ULTIMO** de su contenedor.
Ten en cuenta que hay que poner la etiqueta a la que se va a aplicar, **NO** a la del contenedor
```html
<style>
	/* poner el aplicado (p) no el contenedor (body) */
	p:last-child{
		color: blue;
	}
</style>

<body>
	<p>normal</p>
	<p>normal</p>
	<p>azul</p>
</body>
```

### only-child
Este solo se aplica a los elementos que sean el **UNICO** de su contenedor.
Ten en cuenta que hay que poner la etiqueta a la que se va a aplicar, **NO** a la del contenedor
```html
<style>
	/* poner el aplicado (p) no el contenedor (body) */
	p:only-child{
		color: blue;
	}
</style>

<body>
	<div>
		<p>azul</p>
	</div>
	<div>
		<p>normal</p>
		<p>normal</p>
	</div>
</body>
```






## De usuario
Estas se aplican según algunas interacciones del usuario
### link
Esta se considera una pseudoclase link y solo se puede asignar al elemento `<a>`
Se aplica a un enlace **NO** visitado
- [ ] Diseño: preguntar si esto esta correcto lo de la ``<a>`` pq en los apuntes esta cortado XD
```CSS
/* poner los enlaces NO visitados de color verde*/
a:link{ color: green;}
```
### visited
Esta se considera una pseudoclase link y solo se puede asignar al elemento `<a>`
Se aplica a un enlace **YA** visitado
```CSS
/* poner los enlaces YA visitados de color amarillo*/
a:visited{	color: yellow;}
```

### hover
Este se aplica cuando tienes el **cursor encima** de el elemento
```CSS
/* poner el div amarillo y cambiarlo a naranja cuando se pone el raton por encima */
div{		background-color: yellow;}
div:hover{	background-color: orange;}
```

### active
Este se aplica en el pequeño momento en el que usa un elemento, como hacer click en un botón.
Aunque parezca contradictorio, se puede usar en casi todas las etiquetas
```CSS
/* poner el botton negro mientras se hace click */
button:active{ background-color: black;}
```

### focus
Este no lo explica en los apuntes, pero si lo usa en un ejemplo
Esta etiqueta se aplica cuando estas haciendo *focus* en algo, como escribir texto en un ``<textarea>``, no se aplica a otros elementos en los que no se puede hacer *focus*
```CSS
/* poner el textarea gris mientras el usuario esta escribiendo */
textarea:focus{ background-color: gray;}
```









## Pseudo elementos
>[!quote]+ PDF
> Los pseudoelementos se comportan de manera similar. Sin embargo, actúan como si hubieras añadido un elemento HTML totalmente nuevo en el marcado, en lugar de haber aplicado una clase nueva a los elementos presentes. Los pseudoelementos empiezan con un doble signo de dos puntos ``::``

### first-line
Se aplica a la primera **linea** de texto de un contenedor.
```html
<style>
	body::first-line{
		color: blue;
	}
</style>

<body>
	<p>parrafo azul</p>
	<p>parrafo normal</p>
	<p>parrafo normal</p>
</body>
```

### first-letter
Se aplica a la primera **letra** de texto de un contenedor.
```html
<style>
	p::first-letter{
		color: blue;
	}
</style>

<!-- Solo se aplica a las "A" -->
<p>Azzzz</p>
<p>Azzzz</p>
<p>Azzzz</p>
```








# Herencia
Cuando aplicas un estilo a una etiqueta, aparte de aplicarse a dicha etiqueta también hay atributos que se aplicarán a la etiqueta interior.

```html
<!-- poner el color del texto del body, pone TODOS los elementos dentro del body de color azul -->
<style>
	body{
		color: blue;
	}
</style>

<body>
	<p>parrafo azul</p>
	<h1>encabezado azul</h1>
</body>
```

# Colisión de estilos
En CSS, no hay limite de cuantos atributos se pueden aplicar a una misma etiqueta, ya que incluso hay veces que podemos aplicar [[Guia Regla CSS.png | declaraciones]] de forma accidental a etiquetas por culpa de la herencia.

Por suerte, CSS cuenta con unas normas y una jerarquía para decidir que valor tiene prioridad cuando una etiqueta comparte varias declaraciones contradictorias, generalmente de cuanto mas especifico es un selector mas prioridad tiene de ser aplicado.

## Jerarquía de mayor a menor
### Atributo `style`
Aplicado directamente en la etiqueta con el atributo `style`
```html
<style>
	p{
		color: blue;
	}
</style>

<body>
	<p>parrafo azul</p>
	<p style="color: yellow">parrafo amarillo</p>
	<p>parrafo azul</p>
</body>
```

### Clase e Id
Aplicado en la etiqueta usando una `id` o una `class`.
Tiene mas prioridad la `id`.
```html
<style>
	p{
		color: blue;
	}
	.clase{
		color: green;
	}
	#id1{
		color: red;
	}
</style>

<body>
	<p>parrafo azul</p>
	<p class="clase">parrafo verde</p>
	<p class="clase" id="id1">parrafo rojo</p>
</body>
```

### Selector
Hay selectores que tienen mas prioridad que otros, cuanto mas genérico que sea un selector y mas alejado este del contenido afectado, menor prioridad tendrá.
```html
<style>
	body{
		color: blue;
	}
	p{
		color: red;
	}
</style>

<body>
	<h1>encabezado azul</h1>
	<p>parrafo rojo</p>
</body>
```

### Orden
En caso de que ambas normas tengan la misma prioridad exacta, se aplicara la que este escrita mas **abajo**
```html
<style>
	p{
		color: blue;
	}

	/* mas abajo, mas prioridad*/
	p{
		color: red;
	}
</style>

<body>
	<p>parrafo rojo</p>
	<p>parrafo rojo</p>
</body>
```

## Excepciones
Aunque CSS de prioridad de forma automática, puedes dar prioridad de forma manual a un atributo escribiendo `!important`

```html
<style>
	p{
		color: blue !important;
	}

	/* normalmente se aplica este, pero la declaracion anterior tiene mas prioridad por tener escrito !important */
	p{
		color: red;
	}
</style>

<body>
	<p>parrafo rojo</p>
	<p>parrafo rojo</p>
</body>
```