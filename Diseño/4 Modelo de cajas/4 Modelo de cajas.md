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

Estas dos propiedades no controlan ninguna característica visual de la caja, sino que controlan directamente el tamaño de esta, forzando una caja a un **tamaño** especifico, relativo o absoluto.

La propiedad `width` y `height` controlan el **ancho** y el **alto** de una etiqueta, recibiendo generalmente una medida absoluta positiva (`px`) o un porcentaje `%`, aunque puede recibir `inherit` para usar el de su padre o `auto` para que rellene el espacio de forma automática.

>[!quote]-  Tabla PDF
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
 

# Margen

La propiedad `margin` controla la distancia que hay entre una etiqueta y sus etiquetas adyacentes en las 4 direcciones, recibiendo generalmente una medida absoluta positiva o negativa (`px`) o un porcentaje `%`, aunque puede recibir `inherit` para usar el de su padre o `auto` para use el valor por defecto de su etiqueta original.

Esta propiedad se puede aplicar a las cuatro direcciones (arriba abajo izquierda y derecha) de forma individual usando `margin-top`, `margin-right`, `margin-bottom` y/o `margin-left`, se puede aplicar a solo una, dos o a las 4 a la vez, pudiéndose usar también a la vez que `margin`. 
Aunque generalmente se escribe de forma simplificada o *shorthand* directamente en ``margin``, seguido de sus atributos separados **solo** por espacios.
```css
/* Ejemplo defiliendo 4 valores */
*{margin: 1px 2% inherit auto}
```
Escribir diferente cantidad de valores hace que estos se compartan entre las 4 direcciones, siguiendo este [[Orden Cajas Simplificadas#Es el orden de las agujas del reloj | orden]]


Ten en cuenta que cuando dos márgenes distintos se aplican entre ellos se **sobreponen**, por lo que se acaba usando el valor del margen mayor.
Ejemplo del PDF:
![[{4EA3DC59-341E-4763-A64E-317AC497E140}.png]]

Esto tambien se aplica a la superposicion de margenes entre un objeto interior con su objeto padre. 
Ejemplo del PDF:
![[{9D9E8AFB-79F0-4ED8-BEA0-DBF3D4D98270}.png]]


>[!quote]-  Tabla PDF
| Propiedad | margin |
| ----------- | -------- |
| Valores | unidad de medida / porcentaje / auto / inherit |
| Valor inicial | 0 (aclaración mas abajo)  |
| Descripción | Establece cada uno de los márgenes horizontales y verticales de un elemento |
| Se aplica a | Todos los elementos, salvo margin-top y margin-bottom que sólo se aplican a los elementos de bloque y a las imágenes |


>[!info]- Aclaración Valor inicial de margen
>*Aclaración personal **NO** dicha por la profesora*
> Aunque es verdad que el margen de la mayoría de etiquetas es 0 por defecto, hay algunas que no (como los encabezados o los párrafos)




# Relleno

La propiedad `padding` controla el tamaño **EXTRA** de una etiqueta en las 4 direcciones, recibiendo generalmente una medida absoluta positiva o negativa (`px`) o un porcentaje `%`, aunque puede recibir `inherit` para usar el de su padre o `auto` para use el valor por defecto de su etiqueta original.

Esta propiedad se puede aplicar a las cuatro direcciones (arriba abajo izquierda y derecha) de forma individual usando `padding-top`, `padding-right`, `padding-bottom` y/o `padding-left`, se puede aplicar a solo una, dos o a las 4 a la vez, pudiéndose usar también a la vez que `padding`. 
Aunque generalmente se escribe de forma simplificada o *shorthand* directamente en ``padding``, seguido de sus atributos separados **solo** por espacios.
```css
/* Ejemplo defiliendo 4 valores */
*{padding: 1px 2% inherit auto}
```
Escribir diferente cantidad de valores hace que estos se compartan entre las 4 direcciones, siguiendo este [[Orden Cajas Simplificadas#Es el orden de las agujas del reloj | orden]]


>[!quote]-  Tabla PDF
>| Propiedad | padding |
>| ----------- | -------- |
>| Valores | ( unidad de medida / porcentaje ) {1, 4} / inherit |
>| Valor inicial | - | 
>| Descripción | Establece de forma directa todos los rellenos de los elementos |
>| Se aplica a | Todos los elementos excepto algunos elementos de tablas como grupos de cabeceras y grupos de pies de tabla |
>>[!done] Pregunta: lo de {1, 4} de la tabla se refiere al shorthand
>>- [ ] Diseño: preguntar si lo de {1, 4} de la tabla se refiere al shorthand



# Bordes
Todas las etiquetas de HTML se les puede aplicar un **borde**, esto se hace a traves del atributo `border`. A diferencia de otros atributos, un borde esta constituido de varios valores exclusivos para este (según el PDF 20), asi que veremos a continuación los mas comunes:


### Anchura

La propiedad `border-width` especifica el ancho de un borde, tanto especificándolo en las cuatro direcciones independientemente (`border-top-width`), o usando el método *shorthand*. 
De valores se puede indicar de forma absoluta (`px`) o relativa (`em`), o usando una de las tres palabras clave que tiene la propiedad (`thin`, `medium` o `thick`). Aunque la mas común es en pixeles

```css
/* Ejemplo defiliendo 4 valores */
*{border-width: 1px 2em thin thick}
```

>[!quote]-  Tabla PDF
| Propiedad | border-top-width, border-right-width, border-bottom-width, border-left-width |
| ----------- | -------- |
| Valores | ( unidad de medida / thin / medium / thick ) / inherit |
| Valor inicial | Medium | 
| Descripción | Establece la anchura de cada uno de los cuatro bordes de los elementos |
| Se aplica a | Todos los elementos |

### Color
La propiedad `border-color`

```css
/* Ejemplo defiliendo 4 valores, ejemplo MUY bueno para entender y comprobar el shorthand */
*{border-color: }
```

>[!quote]-  Tabla PDF
| Propiedad | border-top-color, border-right-color, border-bottom-color,border-left-color |
| ----------- | -------- |
| Valores | color / transparent / inherit |
| Valor inicial | - | 
| Descripción | Establece el color de cada uno de los cuatro bordes de los elementos |
| Se aplica a | Todos los elementos |

### Estilo
La propiedad `border-style`

```css
/* Ejemplo defiliendo 4 valores */
*{border-style: }
```

>[!quote]+  Tabla PDF
| Propiedad |  |
| ----------- | -------- |
| Valores |  |
| Valor inicial |  | 
| Descripción |  |
| Se aplica a |  |

### Redondear
La propiedad `border-radius`

```css
/* Ejemplo defiliendo 4 valores */
*{border-radius: }
```

>[!quote]+  Tabla PDF
| Propiedad |  |
| ----------- | -------- |
| Valores |  |
| Valor inicial |  | 
| Descripción |  |
| Se aplica a |  |

### Bordes *Shorthand*
Se puede establecer un borde de forma shorthand usando


>[!quote]+  Tabla PDF
| Propiedad |  |
| ----------- | -------- |
| Valores |  |
| Valor inicial |  | 
| Descripción |  |
| Se aplica a |  |

# Background

>[!quote]+  Tabla PDF
| Propiedad |  |
| ----------- | -------- |
| Valores |  |
| Valor inicial |  | 
| Descripción |  |
| Se aplica a |  |


---

- [ ] DIseño: TODO bordes y background