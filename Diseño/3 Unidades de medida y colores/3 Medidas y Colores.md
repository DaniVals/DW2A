


# Unidades de medida
>[!quote]+ PDF
>Las medidas en CSS se emplean, entre otras, para definir la altura, anchura y márgenes de los elementos y para establecer el tamaño de letra del texto. 
>
>Todas las medidas se indican como un valor numérico entero o decimal seguido de una unidad de medida (sin ningún espacio en blanco entre el número y la unidad de medida). CSS divide las unidades de medida en dos grupos: absolutas y relativas. 
>
>Las medidas relativas definen su valor en relación con otra medida, por lo que para obtener su valor real, se debe realizar alguna operación con el valor indicado. 
>
>Las unidades absolutas establecen de forma completa el valor de una medida, por lo que su valor real es directamente el valor indicado. 
>
>Si el valor es 0, la unidad de medida es opcional. Si el valor es distinto a 0 y no se indica ninguna unidad, la medida se ignora completamente, lo que suele ser uno de los errores más habituales de los diseñadores que empiezan con CSS. 
>
>Algunas propiedades permiten indicar medidas negativas, aunque habitualmente sus valores son positivos. Si el valor decimal de una medida es inferior a 1, se puede omitir el 0 de la izquierda (0.5em es equivalente a .5em).

## Tipos de unidades
### Absolute
Una unidad absoluta no cambia por ninguna causa, no depende de ninguna otra medida.
- px, pixels
- cm
- mm
- in
- pt, puntos
- pc, picas

### Relativas
Una unidad relativa, no están del todo definidas, ya que sus valores hacen referencia a otro elemento
###  em 
 Respecto al tamaño de letra del elemento
 ```CSS
 /* EJEMPLO:    
Poner un margen igual que el tamaño de la letra del parrafo, si la letra es de 16 pixeles, el margen sera de: 16(px) * 1(em)     */
p { 
   margin: 1em; 
}
```

### ex 
respecto a la altura de la letra "x" del tipo y tamaño de letra del elemento
- [ ] Diseño: preguntar por un ejemplo


### Porcentajes
Se indica con el signo ``%``, este es relativo al tamaño original en el que estaria, es muy usado en los ``<div>``


```CSS
/* EJEMPLO:
Poner que el encabezado ocupe el 20% de su altura original */

#encabezado{
    height: 20%;
}
```

# Colores
Los colores es un valor se que puede asignar a muchas **Declaraciones**
```CSS
*{color: /* elije un color*/}
```

[generador de paletas de colores](https://paletton.com/#uid=1000u0kllllaFw0g0qFqFg0w0aF)

### Palabras claves
Son colores genéricos y prefijados que se pueden escribir directamente en ingles
```CSS
*{color: red}
```

>[!example]- Colores clave
> + <mark style="background: #FF0000; color: #000;">red</mark>
> + <mark style="background: #FFA500; color: #000;">orange</mark>
> + <mark style="background: #FFFF00; color: #000;">yellow</mark>
> + <mark style="background: #00FF00; color: #000;">lime</mark>
> + <mark style="background: #00FFFF; color: #000;">aqua</mark>
> + <mark style="background: #0000FF; color: #000;">blue</mark>
> + <mark style="background: #FF00FF; color: #000;">fuchsia</mark>
> 
> - <mark style="background: #800000; color: #fff;">maroon</mark>
> - <mark style="background: #808000; color: #fff;">olive</mark>
> - <mark style="background: #008000; color: #fff;">green</mark>
> - <mark style="background: #008080; color: #fff;">teal</mark>
> - <mark style="background: #000080; color: #fff;">navy</mark>
> - <mark style="background: #800080; color: #fff;">purple</mark>
> 
> + <mark style="background: #FFFFFF; color: #000;">white</mark>
> + <mark style="background: #c0c0c0; color: #000;">silver</mark>
> + <mark style="background: #808080; color: #fff;">gray</mark>
> + <mark style="background: #000000; color: #fff;">black</mark>



### RGB hexadecimal
Son colores escritos cada valor **RGBA** en **Hexadecimal** de forma seguida, indicándolo con un `#`
```CSS
*{color: #FF0000}
```
 >[!info] Colores seguros
>Son colores que saltan cada 3 (00 33 66 99 CC FF)
>Hay 216 (6^3)

### RGB decimal
Son colores escritos cada valor **RGBA** poniendo el valor de cada uno en la función `rgb()` desde 0 a 255
```CSS
*{color: rgb(255, 0, 0)}
```

### RGB porcentual
Son colores escritos cada valor **RGBA** poniendo el valor de cada uno en la función `rgb()` con su porcentaje de 0 a 100
```CSS
*{color: rgb(100%, 0%, 0%)}
```