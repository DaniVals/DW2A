[[Apuntes Despliegue|Home]]
# ==docker run {imagen}==
abre un contenedor
--name {nombre}
-d (desenlazar el contenedor con el terminal abierto)
-p {puerto nuevo}:{puerto original} (mapear puertos)

---
# ==docker rm {nombre contenedor}==
borra un contenedor

---
# ==docker ps==
para listar todos los contenedores activos

---
# ==docker ps -a==
para listar todos los contenedores desplegados

---
# ==docker log {nombre contenedor}==
muestra el log de un contenedor INCLUSO si ha fallado al abrir

---
# ==docker stop/start {nombre contenedor}==
pausa/reanuda un contenedor

