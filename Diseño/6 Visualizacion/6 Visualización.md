
# Visualización
Además de las propiedades que controlan el posicionamiento, hay otras que controlan como se muestran estas. 

### `display`
Esta propiedad permite cambiar el tipo de caja de un elemento, como hacer un `<p>` un elemento `inline` o hacer un `<span>` un elemento `block`.

Esta propiedad se usa en visualización ya que permite desaparecer completamente un elemento y que el resto de cajas no lo tengan en cuenta para su posicionamiento:
```css
/* hacer desaparecer un div*/
div{display: none}

/* cambiar p a un elemento en linea y span a un elemento en bloque*/
p{display: inline}
span{display: block}
```

>[!quote]+ Tabla PDF
TODO, 
aprovecho este espacio para indicar que la propiedad `display` tiene MUCHOS mas valores que `block`, `inline` y `none`.
Pero no los hemos dado (aunque si menciona esto mismo en los apuntes) asi que no los podemos usar.

### `visibilty`
Esta propiedad solo permite volver invisible o no a una caja con los valores `hidden` o `visible`.
Por defecto (obviamente) esta propiedad esta en `visible`, pero si se hace invisible, las posiciones de las cajas siguen funcionando como si estuviese ahí.

El valor `collapse` solo se usa en filas, columnas o similares, ya que oculta completamente la fila o columna especificada. Si se usa en otros elementos funciona como `hidden`


>[!caution] Relación entre `display`, `float` y `position`
>Cuando se establecen las tres propiedades en una caja, se interpreta así:
>- Si `display: none` se ignora el resto
>- Si `position: {absolute | fixed}` se ignora la propiedad `float` y se coloca la caja en la posición establecida con `top/right/bottom/left`
>- En el resto de casos, la caja se coloca de forma flotante y la propiedad `display` se pone en `block`, da igual la etiqueta
>
>(esto esta aquí al final en el PDF y no se donde ponerlo, asi que lo meto en un *callout* aquí abajo)


### `overflow`
Normalmente un elemento ocupa todo el espacio necesario para mostrar su contenido, pero hay ocasiones en las que un contenido es mas grande que el tamaño de su elemento, ya sea en su eje X o Y, o en ambos a la vez.
Esto generalmente ocurre porque la propiedad `width` y `height` son demasiado pequeñas.

En estos casos usamos la propiedad `overflow` para ==indicar como gestionar== dicho contenido sobrante.

- `visible`: se ve el contenido restante fuera del espacio de la etiqueta. Esta es la opción por defecto (en mi opinión: queda muy cutre, no la recomiendo)
- `hidden`: el contenido sobrante se oculta y solo se muestra lo que quede dentro del tamaño de la etiqueta
- `scroll`: genera una barra de desplazamiento para mover el contenido interno de la etiqueta, lo que no cabe se oculta
- `auto`: usa el valor por defecto del navegador, generalmente `scroll`

>[!info] Extra: `overflow-x` y `overflow-y`
>Como hemos visto antes, el `overflow` puede ocurrir en cualquier eje, pero con las propiedades `overflow-x` y `overflow-y` podemos especificar cómo tratar ese sobre flujo en ambas direcciones de forma separada, 
>Ej: poner un scroll vertical y ocultar el sobrante horizontal  
>```css
>div{
>	overflow-x: hidden;
>	overflow-y: scroll;
>}
>```


### `z-index`
Esta propiedad permite controlar una *tercera dimensión* (el eje Z) a la hora de colocar cajas, por lo que dicta que caja se muestra por encima de otra cuando dos cajas se solapan (por defecto se muestra antes la que este mas abajo en el código HTML)

Esta propiedad admite un valor numérico, que indica cual tiene mas prioridad. Aunque se considere que `0` es el valor neutro y mas bajo, se admiten números negativos para establecer que un elemento debería ir detrás


- [ ] Diseño - TODO: revisar y copiar las tablas del PDF (T6)