# Modelo de cajas
El modelo de cajas o **box model** es una parte fundamental del funcionamiento interno de HTML y CSS

Este modelo explica que **TODAS** las etiquetas están contenidas en cajas rectangulares, las cuales se crean automáticamente al escribir cualquier etiqueta

Aunque estas cajas no sean visibles por defecto, esto se puede cambiar usando diferentes atributos CSS que modifican su tamaño, su fondo, su margen, su relleno y su borde.

## Atributos de una caja

Las partes que componen una caja ordenadas de interior a exterior
- **Contenido (content):** el interior de una etiqueta HTML, como el texto de un parrafo
- **Relleno (padding):** espacio libre extra entre el borde y el contenido
- **Borde (border):** linea que define el "final" de su caja
- **Fondo (background):** espacio detrás del contenido principal de la etiqueta
- **Margen (margin):** espacio libre mínimo entre el resto de etiquetas próximas


--- start-multi-column: EjemplosModeloCaja
```column-settings
Number of Columns: 2
Largest Column: standard
```

Ejemplo sacado del PDF

![[Ejemplo Caja del PDF.png]]

--- column-break ---

Ejemplo de inspeccionar una pagina
En este caso muestra los **tamaños** de los atributos

![[Pasted image 20241008110402.png]]

--- end-multi-column


# Anchura y altura
Estas dos propiedades no controlan ningún visual de la caja, sino que controlan directamente el tamaño de esta, forzando una caja a un **tamaño**

La propiedad `width` y `height` controlan el **ancho** y el **alto** de una etiqueta, recibiendo generalmente una medida positiva (`px`) o un porcentaje `%`, aunque puede recibir `inherit` para usar el de su padre o `auto` para que rellene el espacio de forma automática.


>[!quote]+  Tabla PDF
| Propiedad | {width / height} |
| ----------- | ----------------- |
| Valores | unidad de medida / porcentaje / auto / inherit |
| Valor inicial | auto |
| Descripción | Establece la {anchura / altura} de un elemento |
| Width se aplica a | Todos los elementos, salvo los elementos en línea que no sean imágenes, las filas de tabla y los grupos de filas de tabla |
| Height se aplica a | Todos los elementos, salvo los elementos en línea que no sean imágenes, las columnas de tabla y los grupos de columnas de tabla |


>[!info]- Extra: min y max
>*Aunque la profe dice que lo veremos mas adelante yo prefiero dejarlo aquí ya, pero imagino que esto no cae en el examen*
>Se pueden usar la propiedad ``min-width`` y/o ``max-width`` para establecer un rango a la propiedad, en vez de darle un valor fijo
>Esto también se puede aplicar a la altura con ``min-height`` y/o ``max-height``
 



# Margen y relleno
## Margen

## Relleno





# Bordes


### Anchura
### Color
### Estilo
### Redondear

### Shorthand

# Background


