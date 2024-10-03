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

## Incluir CSS en HTML

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

- [x] preguntar por @import

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

---
ha dicho que no hemos hecho practica así que nos lo miremos por nuestra cuenta (i_i)
- [x] Diseño: Medios (1.4)
- [x] Diseño: 1.6?







