


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
>[!example]  **em** 
> Respecto al tamaño de letra del elemento
> ```CSS
> /* EJEMPLO:    
> Poner un margen igual que el tamaño de la letra del parrafo, si la letra es de 16 pixeles, el margen sera de: 16(px) * 1(em)     */
> p { 
>    margin: 1em; 
> }
> ```

- ex (respecto a la altura de la letra "x" del tipo y tamaño de letra del elemento)
- [ ] preguntar por un ejemplo

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

>[!example]+ Colores clave
> - red
> - black
> - fuchsia
> - olive
> - maroon
> - silver
- [ ] Diseño: apuntar colores clave


### RGB hexadecimal
Son colores escritos cada valor **RGBA** en **Hexadecimal** de forma seguida, indicándolo con un `#`
```CSS
*{color: red}
```
 **Colores seguros**
Son colores que saltan cada 3 (00 33 66 99 CC FF)
Hay 216 (6^3)

### RGB decimal
Son colores escritos cada valor **RGBA** poniendo el valor de cada uno en la función `rgb()` desde 0 a 255
```CSS
*{color: red}
```

### RGB porcentual
Son colores escritos cada valor **RGBA** poniendo el valor de cada uno en la función `rgb()` con su porcentaje de 0 a 100
```CSS
*{color: red}
```