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

(TODO: comprobar que es esto pq solo lo he copiado)
la propiedad `direction` define donde colocar el texto, si de izquierda a derecha, como en la mayoría de países, se usa `ltr` (left to right). Si quieres que sea de derecha a izquierda, como en países árabes, se usa `rtl` (right to left).

### Posicionamiento absoluto
```css
*{position: relative}
```
En este caso, la caja se desplaza con `top/right/bottom/left` con respecto a la posición del ultimo elemento padre con la propiedad `position` que no sea `static`. Si no encuentra nada, se usa el tamaño de la ventana del navegador.

Cuando una caja se muestra de forma absoluta, el resto de cajas la ignoran para calcular su posición.

### Posicionamiento fijo


### Posicionamiento flotante (``float``)



