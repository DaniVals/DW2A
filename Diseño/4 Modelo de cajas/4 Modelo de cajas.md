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


%% Una tabla para que se ponga cada ejemplo uno al lado del otro %%
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

![[Ejemplo cajas Navegador.png]]

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
La propiedad `border-color` establece el [[3 Medidas y Colores#Colores| color]] del borde

```css
/* Ejemplo defiliendo 4 valores, ejemplo MUY bueno para entender y comprobar el shorthand */
*{border-color: red yellow green blue}
```

>[!quote]-  Tabla PDF
| Propiedad | border-top-color, border-right-color, border-bottom-color,border-left-color |
| ----------- | -------- |
| Valores | color / transparent / inherit |
| Valor inicial | - | 
| Descripción | Establece el color de cada uno de los cuatro bordes de los elementos |
| Se aplica a | Todos los elementos |

### Estilo
La propiedad `border-style` define como se muestra el borde, ya sea completamente plano con `solid` o usando puntitos con `dashed`.

```css
/* Ejemplo defiliendo 4 valores */
*{border-style: solid dashed dotted double}
```

>[!example]+ lista de estilos en Obsidian con HTML
>Aqui una lista con todos los estilos de borde hecha directamente en Obsidian.
>Si no usas Obsidian, lo puedes ver en el [[1.UsoEstilos39-65.pdf#page=14 | ejemplo del PDF]]
><p style="border: 10px none">none</p>
><p style="border: 10px hidden">hidden</p>
><p style="border: 10px solid">solid</p>
><p style="border: 10px dashed">dashed</p>
><p style="border: 10px dotted">dotted</p>
><p style="border: 10px double">double</p>
><p style="border: 10px groove">groove</p>
><p style="border: 10px ridge">ridge</p>
><p style="border: 10px inset">inset</p>
><p style="border: 10px outset">outset</p>



>[!quote]-  Tabla PDF
| Propiedad | border-style |
| ----------- | -------- |
| Valores | (none / hidden / dotted / dashed / solid / double / groove / ridge / inset / outset ) {1, 4} / inherit |
| Valor inicial | - | 
| Descripción | Establece el estilo de todos los bordes del elemento |
| Se aplica a | Todos los elementos |

### Redondear
La propiedad `border-radius` establece el radio de una esquina de un borde.
Se puede aplicar a un elemento sin borde para redondearlo, como una foto

```css
/* Ejemplo defiliendo 4 valores */
*{border-radius: 5px 50%}
```
>[!caution] cuidado con los ovalos
>*Esto **creo que no** lo dijo la profe pero lo apunto igual porque es bastante importante*
>Cuando aplicar un radio excesivo con pixeles, simplemente se redondeara hasta que las esquinas "choquen" en un lado
>Pero cuando usas porcentajes, se pone hasta tocarse en ambos lados, quedando de forma ovalada
> <span style="border: 3px solid; border-radius: 999px">---- 999px ----</span> <span style="border: 3px solid; border-radius: 999%">---- 999% ----</span>

### Bordes *Shorthand*
Se puede establecer un borde de forma shorthand usando directamente el nombre que quieras cambiar, o simplemente `border` si quieres que sea igual en las cuatro caras
```css
/* un borde solido, negro y de 10px de ancho */
*{border: 10px solid black;}
```


>[!quote]-  Tabla PDF
| Propiedad | border-top, border-right, border-bottom, border-left |
| ----------- | -------- |
| Valores | ( unidad de medida_borde // color_borde // estilo_borde ) / inherit |
| Valor inicial | - | 
| Descripción | Establece el estilo completo de cada uno de los cuatro bordes de los elementos |
| Se aplica a | Todos los elementos |
> ---
| Propiedad | border |
| ----------- | -------- |
| Valores | ( unidad de medida_borde // color_borde // estilo_borde ) / inherit |
| Valor inicial | - | 
| Descripción | Establece el estilo completo de todos bordes de los elementos |
| Se aplica a | Todos los elementos |




# Fondo
El fondo (`background`) es el ultimo elemento que forma una caja, se pone **detrás** del contenido y del relleno (`padding`) pero **no** del borde ni del margen.

Aunque lo mas común es darle un color plano, también se le puede dar una imagen. Estas dos opciones son compatibles, ya que el color se pone por detrás de la imagen, por lo que solo se ve si la imagen tiene transparencia.

### background-color
Esto permite poner un [[3 Medidas y Colores#Colores | color]] al fondo de una caja, por defecto es transparente.

```css
/* poner el fondo de color rojo */
*{background-color: red;}
```

>[!quote]-  Tabla PDF
| Propiedad | background-color |
| ----------- | -------- |
| Valores | color / transparent / inheri |
| Valor inicial | transparent | 
| Descripción | Establece un color de fondo para los elementos |
| Se aplica a | Todos los elementos |

### background-image
La propiedad `background-image` permite poner una imagen de fondo por delante del color, asignando la imagen a través de una dirección absoluta, relativa o una URL, indicando el valor de este dentro de la (¿función de CSS?, no estoy seguro de si es una función pero se que existen funciones dentro de CSS) `url()` **con comillas**
```css
*{
	background-image: url("fondo.png"); /* relativa */
	background-image: url("/carpeta/fondo.png"); /* absoluta */
}
```
Se recomiendo poner igualmente un `background-color`, así si la imagen es transparente, se vera por detrás, y si no carga, se vera este color. 

Cuando una imagen es mas grande que su caja, esta se **recortara** en vez de estirarse, pero cuando es mas pequeña, esta se **duplicara**, creando un estampado. Esto permite subir imágenes muy pequeñas y bien *loopeadas* para que así puedan cargar rápido y crear **estampados**.
Ejemplo PDF: ![[1.UsoEstilos39-65.pdf#page=21]]


>[!info]- Extra: fondo por URL
>Esto no lo dijo la profe, pero yo lo apunto porque es muy útil, pero se pueden poner fotos directamente online dentro de la función `url()`.
>
>Por cierto, cuando un archivo lo sacas de una URL, sigue teniendo su extensión al final, fíjate en si estas cargando una extensión valida (o una extensión de foto para empezar) cuando hagas esto y no funcione.
>```css
>*{background-image: url("https://pagina.web/fondo.png");}
>```
>Para obtener la URL a través del navegador, simplemente encuentra la foto en el navegador, haga click derecho y tienes que darle a la opción de ***copiar dirección de la imagen***

>[!quote]-  Tabla PDF
| Propiedad | background-image |
| ----------- | -------- |
| Valores | url / none / inherit |
| Valor inicial | none | 
| Descripción | Establece una imagen como fondo para los elementos |
| Se aplica a | Todos los elementos |


### background-repeat
La propiedad `background-repeat` permite elegir si una imagen se repite como un estampado o no, o solamente en un eje con `repeat-x` y `repeat-y`. Por lo que depende de si hay una imagen de fondo.
```css
*{
	background-image: url("estampado_horizontal.png");
	background-repeat: repeat-x;
}
```

>[!quote]-  Tabla PDF
| Propiedad | background-repeat |
| ----------- | -------- |
| Valores | repeat / repeat-x / repeat-y / no-repeat / inherit |
| Valor inicial | repeat | 
| Descripción | Controla la forma en la que se repiten las imágenes de fondo |
| Se aplica a | Todos los elementos |


>[!info]- Extra: mas atributos
>`space`: esto sigue generando el estampado pero se asegura de que NO se recorte, añadiendo espacio transparente de forma dinámica y equilibrada hasta que quepa otra imagen, para asegurarse que la imagen siempre se queda alineada al borde de la caja
>`round`: similar a *space* esto sigue generando el estampado pero se asegura de que NO se recorte, estirando de forma equivalente el estampado hasta que quepa otra imagen 



### background-position
La propiedad `background-position` permite elegir la posición de la imagen del fondo esto se puede hacer de varias formas:
- usando dos valores numéricos (px, em, %, etc...) para la posición x, y
- estableciendo directamente la posición (center / bottom / top right)
- estableciendo el valor de cada dimensión (top=50%, right=50%, bottom=50%, left=50%)
```css
*{
	background-image: url("estampado_horizontal.png");
	
	/* los dos lo ponen en el centro */
	background-position: 50% 50%;
	background-position: center;
}
```
Estas son compatibles con la propiedad `background-repeat`, como centrar un estampado horizontal a la parte inferior del encabezado


>[!quote]-  Tabla PDF
| Propiedad | background-position |
| ----------- | -------- |
| Valores | ( ( porcentaje / unidad de medida / left / center / right ) ( porcentaje / unidad de medida / top / center / bottom )? ) | ( ( left / center / right ) // ( top / center / bottom ) ) / inherit |
| Valor inicial | 0% 0% | 
| Descripción | Controla la posición en la que se muestra la imagen en el fondo del elemento |
| Se aplica a | Todos los elementos |

### background-attachment
La propiedad `background-attachment` decide si la foto se mueve junto al scroll de la pantalla o no, especialmente útil si hay un menú lateral, que la imagen de fondo se desplace o no junto a la pagina.
```css
/* la profe no dio ejemplo de esto, asi q nose realmente como ponerlo.*/
```

>[!quote]-  Tabla PDF
| Propiedad | background-attachment |
| ----------- | -------- |
| Valores | scroll / fixed / inherit |
| Valor inicial | scroll | 
| Descripción | Controla la forma en la que se visualiza la imagen de fondo: permanece fija cuando se hace scroll en la ventana del navegador o se desplaza junto con la ventana |
| Se aplica a | Todos los elementos |

### background *Shorthand*
Como muchas propiedades de CSS, estas permiten indicar todas las propiedades, generalmente el orden es: color, url de imagen, repetición y posición.

```css
/* poner el fondo transparente, con la foto icon.png, sin repetir y centrada */
*{background: transparent url("icon.png") no-repeat center;}
```

>[!quote]-  Tabla PDF
| Propiedad | background |
| ----------- | -------- |
| Valores | ( background-color // background-image // background-repeat // background-attachment // background-position ) / inherit |
| Valor inicial | - | 
| Descripción | Establece todas las propiedades del fondo de un elemento |
| Se aplica a | Todos los elementos |




### Extra: background-size
*Esta propiedad no la ha explicado la profe, pero la he añadido yo ya que es bastante útil*
La propiedad `background-size` decide el tamaño de la foto del fondo. Este admite un tamaño fijo en unidades (como px) tanto una anchura y que calcule la altura, o usando dos unidades para forzar una anchura y una altura. También se puede usar el valor `contain` para que la imagen ocupe todo el espacio posible sin taparse, dejando hueco o siguiendo el estampado en el espacio restante, o usar `cover` para que la imagen se estire, escondiendo el sobrante


```css
*{
	background-image: url("estampado_horizontal.png");
	background-repeat: no-repeat;
	
	background-size: 10px 20px; /* forzar el tamaño de la imagen a 10px de ancho y 20px de alto */
	
	background-size: contain; /* que el tamaño se adapte al contenedor dejando espacio en el hueco sobrante */
	
	background-size: cover; /* que el tamaño se adapte al contenedor estirando la imagen para no dejar hueco */
	
}
```





# Tamaño total de la caja
La propiedad `box-sizing` define que se tendrá en cuenta para el tamaño de una caja

### content-box
`content-box` define que la anchura total con la que se muestra un elemento es su propiedad `width` y `height`, y luego puede crecer con el tamaño del `padding`, `border` y `margin`.

```css
*{box-sizing: content-box}
```

### border-box
`content-box` define que la anchura total con la que se muestra un elemento no es solo su propiedad `width` y `height`, sino también el tamaño del `padding`, `border` y `margin`, obligando al propio contenido a menguar para que ocupe el tamaño especificado.
```css
*{box-sizing: border-box}
```

---
>[!caution] Ten en cuenta
> **No** es recomendable usarlo en height, ya que darle  un tamaño fijo a la altura de un elemento puede hacer que lo que no quepa en la etiqueta se sobreponga o no se muestre.
> Pero si no le defines una altura, el elemento se ira alargando según le añadas información.