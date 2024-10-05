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

## Universal
Selecciona **TODOS** los elementos de una pagina.
Mas allá de este ejemplo no se usa mucho directamente, pero si se suele combinar con otro tipo de etiquetas.


```CSS
/* Ejemplo quitar el margen y el  a todos*/
* {
	margin:  0px;
	padding: 0px;
}
```

## Tipo o etiqueta
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

## Clase
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

## ID
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

## Descendente
Selecciona los atributos **DENTRO** de dichos atributos, separados por espacios.
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

## Múltiple
Selecciona los atributos **INDIVIDUALMENTE**, separados por comas.
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
- [ ] Diseño: TODO selectores avanzados


# Selectores Pseudo-clases
- [ ] Diseño: TODO selectores pseudoclases