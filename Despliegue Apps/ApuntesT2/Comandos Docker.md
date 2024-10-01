```shell
docker run {imagen} (abre un contenedor)
--name {nombre}
-d (desenlazar el contenedor con el terminal abierto)
-p {puerto nuevo}:{puerto original} (mapear puertos)
```

---
```shell
docker rm {nombre contenedor} (borra un contenedor)
```

---
```shell
docker ps (para listar todos los contenedores activos)
-a (para listar todos los contenedores desplegados)
```

---
```shell
docker log {nombre contenedor}
muestra el log de un contenedor INCLUSO si ha fallado al abrir
```

---
```shell
docker [stop/start] {nombre contenedor} (pausa/reanuda un contenedor)
```

