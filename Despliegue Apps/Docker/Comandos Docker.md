# Basics
### Mostrar lista de comandos
```bash
docker help
```


# Contenedores
### Abrir un contenedor
Abre un contenedor a través de una imagen ```.iso```, si no encuentra dicha imagen descargada, la busca en su [pagina web](https://hub.docker.com) y la descarga automáticamente

```shell
docker run {nombre_imagen}
--name {nombre}
-d (desenlazar el contenedor con el terminal abierto)
-p {puerto nuevo}:{puerto original} (mapear puertos)
```

### borrar un contenedor
```shell
docker rm {nombre contenedor}
```

### Listar contenedores activos
```shell
docker ps
-a (para listar todos los contenedores desplegados, activos o no)
```

### Mostrar log
muestra el log de un contenedor INCLUSO si ha fallado al abrir
```shell
docker log {nombre contenedor}
```

### Pausar / Reanudar un contenedor
```shell
docker [stop/start] {nombre contenedor}
```

### Ejecutar un comando dentro de un contenedor
```bash
docker exec -it
```

# Imágenes
### Listar imágenes
```bash
docker images
```


### Borrar una imagen
```bash
docker rmi
```


para borrar TODAS
```bash
docker system prune -a
```

### Inspeccionar contenedores
```bash
docker inspect
```


# Docker Compose
- [ ] Despliegue: TODO - apuntes docker compose