Permite aplicar normas en CSS bajo unas condiciones, lo que permite cambiar el diseño de la misma pagina sin necesidad de JS

```css
/* cuando pasa de 600px */
body {
    background-color: lightyellow;
}
@media (max-width: 600px) {
    /* hasta un maximo de 600px (osea menos de 600px) NO INCLUIDO */
    body {
        background-color: lightcoral;
    }
}
@media (max-width: 400px) {
    body {
        background-color: lightgreen;
    }
}
@media (max-width: 200px) {
    body {
        background-color: lightblue;
    }
}
```

## Condiciones
### `min-width`
### `max-width`
### `orientation`
- `landscape`: cuando el dispositivo esta en horizontal. Se aplica en móvil o no ya que solo comprueba que la anchura sea mayor a la altura

### Varias condiciones
```css
body {
    background-color: lightcoral;
}
/* usar una , es como un or */
@media (min-width: 600px) , (max-width: 500px) {
    body {
        background-color: lightblue;
    }
}
```

```css
body {

    background-color: lightcoral;

}
@media (orientation: landscape) and (max-width: 500px) {

    body {

        background-color: lightblue;

    }

}
```
