# Que es CSS

>[!quote]+ PDF
>CSS es un lenguaje de hojas de estilos creado para controlar el aspecto o presentación de los documentos electrónicos definidos con HTML y XHTML. CSS es la mejor forma de separar los contenidos y su presentación y es imprescindible para crear páginas web complejas. 
>
> Separar la definición de los contenidos y la definición de su aspecto presenta numerosas ventajas, ya que obliga a crear documentos HTML/XHTML bien definidos y con significado completo (también llamados "documentos semánticos"). 
> 
> Además, mejora la accesibilidad del documento, reduce la complejidad de su mantenimiento y permite visualizar el mismo documento en infinidad de dispositivos diferentes. 
> 
> Al crear una página web, se utiliza en primer lugar el lenguaje HTML/XHTML para marcar los contenidos, es decir, para designar la función de cada elemento dentro de la página: párrafo, titular, texto destacado, tabla, lista de elementos, etc. 
> 
> Una vez creados los contenidos, se utiliza el lenguaje CSS para definir el aspecto de cada elemento: color, tamaño y tipo de letra del texto, separación horizontal y vertical entre elementos, posición de cada elemento dentro de la página, etc

# Incluir CSS en HTML

- [ ] Diseño: añadir ventajas y desventajas


### Usando la etiqueta link
```html
<link rel="stylesheet" type="text/css" href="archivo_externo.css"> 
```
```CSS
/* El archivo referenciado */
p {
	color: rojo;
}
```

### Usando la etiqueta 
```html
<style> 
	p {
		color: rojo;
	}
</style>
```


### En la etiqueta
```html
<p style="color:rojo"> Texto rojo </p>
```


## Glosario
![[Guia Regla CSS.png]]

- Regla: ```h1{ color: black; }```
- Selector: ```h1```
- Declaración: ```color: black;```
- Propiedad: ```color```
- Valor: ```black```

>[!quote]+ PDF
>Un archivo CSS puede contener un número ilimitado de reglas CSS, cada regla se puede aplicar a varios selectores diferentes y cada declaración puede incluir tantos pares propiedad/valor como se desee.

# Medios 
- [ ] Diseño: TODO Medios (1.4)

# Buenas prácticas

### Poner comentarios
Poner comentarios indicando que secciones haces referencia o cual es el objetivo de esa parte del código es muy útil para la comprensibilidad de los archivos, especialmente para trabajos en grupo
```CSS
/* Comentario en CSS */
```
```HTML
<!-- Comentario en HTML -->
```

### Espacios en las clases
Aunque generalmente se una **`_`** para poner espacios en variables, en CSS es mejor poner **`-`** para las **id** o las **class** 

> [!fail] Mal
> ```html
> <div id="mi id" class="mi clase">
> <div id="mi_id" class="mi_clase">
> ```

> [!done] Bien
> ```html
> <div id="mi-id" class="mi-clase">
> ```

### Nombrar por su función y no por su utilidad

### Agrupar reglas por su selector
- [ ] Diseño: TODO Buanes particas (1.4)

### Estructurar visualmente los atributos
Si un atributo solo tiene un parámetro, es recomendable ponerlo en la misma línea, pero si tiene mas atributos con poca correlación entre si, es recomendable usar diferentes líneas.

**En la misma línea:**
```css
/* establecer el color se puede hacer en una misma línea */
p {color: green}

/* establecer color y tamaño también se puede hacer en una misma línea */
p {color: green; font-size: large}
```

**En varias líneas:**
```css
/* cuando se acumulan muchas cosas es mejor abrir la llave y separarlo por bloques, usando comentarios en cada uno */
div {
	/* establecemos el borde */
	border-color: black;
	border-width: 1px;
	border-style: solid;
	
	/* establecemos el tamaño */
	width:  50%;
	height: 20%;
}
```

Ten en cuenta que cuando hacerlo todo en una línea y cuando abrir la llave es completamente subjetivo y personal. Esta es la recomendación del PDF de la profesora 

>[!quote]+ PDF
> Si un elemento solo tiene 3 atributos se pueden poner en la misma línea. 
> Pero si hay más se ponen en líneas diferentes sangrados con tabuladores.

---
- [ ] Diseño: 1.6? No entiendo una mierda, pedir ejemplos





