## Despliegue de una API en contenedores Docker utilizando múltiples servidores de aplicaciones y Apache como proxy inverso.

Requisitos de finalización

**Cierre:** jueves, 9 de enero de 2025, 23:59

El objetivo de esta actividad es diseñar y desplegar una API sencilla con dos endpoints utilizando cuatro servidores de aplicaciones distintos. Cada API debe estar contenida en un contenedor Docker independiente y ser accesible a través de un servidor web Apache configurado como proxy inverso. De esta manera, el alumnado aprenderá a integrar múltiples servidores de aplicaciones bajo un único dominio.

### Funcionalidad de la API

La API debe tener los siguientes dos endpoints:

- GET /hola: Devuelve un saludo genérico. Ejemplo:

`{ "mensaje": "¡Hola, mundo!" }`

- GET /hola/{nombre}: Devuelve un saludo personalizado para el nombre proporcionado. Ejemplo con nombre=Filemon:

`{ "mensaje": "¡Hola, Filemon!" }`

### Implementación

La API debe ser desarrollada utilizando los siguientes servidores de aplicaciones y lenguajes:

- Gunicorn (Python): API desarrollada con Flask o Django.
- Node.js (JavaScript): API desarrollada con Express.js.
- Apache Tomcat (Java): API desarrollada con Java y Spring Boot.

### Despligue con Docker

- Cada servidor de aplicaciones debe estar contenido en su propio contenedor Docker.
- Proporciona un archivo Dockerfile para construir cada imagen del contenedor.
- Los contenedores deben configurarse para escuchar en puertos internos específicos (ej., 8001, 8002, etc.).
- Todos los servicios deben de estar dentro de un docker-compose que orqueste los demás contenedores.

### Configuración de Apache como Proxy Inverso

El servidor Apache debe estar configurado como proxy inverso para enrutar solicitudes hacia los distintos servidores de aplicaciones según las rutas:

- http://localhost/python/hola→ Python.
- http://localhost/node/hola → Node.js.
- http://localhost/java/hola → Apache Tomcat.
- http://localhost/ruby/hola → Ruby con Puma.

Configura Apache utilizando módulos como mod_proxy y mod_proxy_http.

### Pruebas

Prueba que cada endpoint funciona correctamente cuando se accede a través de Apache utilizando curl y [Postman](https://www.postman.com/).

### Entrega

La tarea tendrá como resultado un fichero PDF con la documentación detallada de cada uno de los pasos dados y una justificación de los mismos.