


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
Se indica con el signo ``%``, este es relativo al contenedor en el que esta, es muy usado en los ``<div>``


```CSS
/* EJEMPLO:
Poner que el encabezado ocupe el 20% de la altura de la pantalla*/

#encabezado{
    height: 20%;
}
```

# Colores