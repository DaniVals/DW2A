TODO intro


## Tipos de elementos
HTML separa los elementos en dos grandes grupos, elementos en **línea** y elementos en **bloque**, [[6 Visualización#`display`| esto se puede cambiar con CSS]]

### elementos en bloque (`block`)
SIEMPRE crean una nueva línea
ocupan todo el espacio disponible hasta el final de la línea

Ejemplos mas comunes: `div, form, h1, h2, h3, h4, h5, h6, hr, ol, p, table, ul`

Otros ejemplos: `address, blockquote, center, dir, dl, fieldset, isindex, menu, noframes, noscrip t, pre`


### elementos en línea (`inline`)
No tienen porque empezar una línea nueva
Solo ocupan el espacio necesario para sus contenidos

Ejemplos mas comunes: `a, br, font, img, input, label, select, span, strong, textarea`

Otros ejemplos: `abbr, acronym, b, basefont, bdo, big, cite, code, dfn, em, i, kbd, q, s, samp, small, s trike, sub, sup, tt, u, var`

>[!info] Estos elementos son en linea o en bloque segun las circunstancias
>`button, del, iframe, ins, map, object, script`

## Posicionamiento
Los navegadores diferencian entre cinco tipos de posicionamiento, que podemos cambiar a traves de CSS

En la propiedad `position`, se usan las propiedades `top`, `right`, `bottom` y `left` para dar la posición a la caja, indicando el desplazamiento respecto a cada dirección (px, %, auto, inherit)


### Posicionamiento normal o estático
```css
*{position: static}
```

Es el valor por defecto de `position`

Solo tiene en cuenta el contenido, el valor `width` y `height` y si es un elemento en bloque o en línea, no la propiedad `top/right/bottom/left`

-- (esto esta qui en los apuntes, asi q lo pongo aquí por ahora) --

Cuando un elemento esta dentro de otro se llama *elemento padre* o *elemento contenedor*

Si un elemento no esta contenido en nada, esta contenido en el ``<body>`` (una forma rara de decir que el ``<body>`` es una etiqueta más)

Los elementos en línea formas los *contextos de formato en línea*, mostrándose de forma horizontal



### Posicionamiento relativo
```css
*{position: relative}
```
En este caso, la caja se desplaza con `top/right/bottom/left` con respecto a su posición original.

Esta solo afecta a su renderización, pero no afecta al tamaño ocupado, por lo que las cajas adyacentes siguen detectando el espacio ocupado por dicha caja en su posición original

(TODO: comprobar que es esto pq solo lo he copiado ya que esta aquí de repente)
la propiedad `direction` define donde colocar el texto, si de izquierda a derecha, como en la mayoría de países, se usa `ltr` (left to right). Si quieres que sea de derecha a izquierda, como en países árabes, se usa `rtl` (right to left).




### Posicionamiento absoluto
```css
*{position: absolute}
```
En este caso, la caja se desplaza con `top/right/bottom/left` con respecto a la posición del ultimo elemento padre con la propiedad `position` que no sea `static`. Si no encuentra nada, se usa el `<body>` como contenedor.

Cuando una caja se muestra de forma absoluta, el resto de cajas la ignoran para calcular su posición.



### Posicionamiento fijo
```css
*{position: fixed}
```
Se considera que el posicionamiento fijo es un caso particular del absoluto, ya que solo se diferencian en como actúan las cajas de su alrededor.

Este se diferencia en que no es fijo al `<body>`, sino a la ventana entera, es decir, 
un `position: absolute` se movería hacia arriba y abajo junto a la pagina, 
un `position: fixed` seguiría estando en la misma posición de la ventana

### Posicionamiento flotante (``float``)
El posicionamiento flotante no funciona como el resto de posicionamientos, ya que no usa la propiedad `position`, sino una propia llamada `float`.

```css
.flotante-derecha{
	float: right;
}
.flotante-izquierda{
	float: left;
}
```

Esta propiedad especifica el flujo de esa caja, es decir, si el flujo debería amontonarse hacia un lado o al otro. Como esta deja de pertenecer al posicionamiento normal, ya que pasa a ser flotante, el resto de cajas normales la ignoran **PERO NO** las demás cajas flotantes

Estas cajas se colocan entre ellas sin solaparse ni sobresalir, colocándose de forma automática con el resto de elementos, que ocupan el poco espacio restante entre cajas flotantes 

Cuando quieres evitar que una caja se encaje en esos pequeños huecos, algo especialmente común en los elementos en línea pero que también sucede con elementos en caja, usamos la propiedad `clear`, que permite especificar `left` o `right`, o simplemente usar `both` para evitar el posicionamiento flotante

```css
.evitar-flotamiento{
	clear: both;
}
```

Si una caja con elementos flotantes, pueden darse casos en los que el contenido se sale, por lo que recomienda ponerle `overflow: auto` para que se encargue de ello


- [ ] Diseño - TODO: revisar y copiar las tablas del PDF (T5)