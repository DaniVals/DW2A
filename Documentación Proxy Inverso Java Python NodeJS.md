# Introducción
Hola chat, hoy vamos a hacer un servidor basado en microservicios, este estará formado por tres microservicios, **Gunicorn con python**, **NodeJS con JavaScript** y **Spring y Tomcat con Java**. Estos tres serán interconectados a traves de un proxy inverso configurado en **Apache** y luego lanzaremos todos a la vez usando **docker-compose**

# Apache
Para configurar un servidor de proxy inverso en apache, tenemos que crear un *site* que redirija a los diferentes puertos con los otros tres servidores web
Esto lo logramos usando diferentes módulos de Apache (activándolos con el comando `a2enmod` en el Dockerfile), siendo estos:
- ``proxy``
- ``proxy_http``
- ``headers``
- ``rewrite``

Una vez instalado apache, reutilizamos el sitio `000-default.conf` para configurar el proxy inverso, activando esta función con la línea `ProxyPreserveHost On`.
Luego añadimos cada URL con la dirección a la que queremos redirigir usando `ProxyPass` y `ProxyPassReverse`, por ejemplo: 
`ProxyPass /nodejs http://nodejs:8002/hola`
`ProxyPassReverse /nodejs http://nodejs:8002/hola`

En el **Dockerfile** copiamos el sitio.conf, exponemos el puerto **80** e iniciamos la aplicación.

Ahora solo nos queda crear los tres sitios web

# Gunicorn para Python
Creamos un archivo **app.py**, en el que usamos Flask para detectar las diferentes rutas del proyecto, dentro de las funciones de cada ruta, hemos usado **Jsonify** para devolver un .json como respuesta. Luego usamos **Flask** otra vez para iniciar la app en el puerto **8001**.

También necesitaremos el archivo ``requirements.txt`` y especificamos la versión de **Gunicorn** y de **Flask**.

Para acabar, creamos el archivo **Dockerfile**, copiamos los archivos, especificamos la ruta de la app, instalamos las dependencias, exponemos el puerto **8001** y ejecutamos la aplicación.

# NodeJS para JavaScript
Primero especificamos las dependencias en un archivo `package.json`, en un archivo `server.js`, creamos una constante llamada *app* en la que guardamos la referencia a *express*, y otra donde guardamos el puerto que vamos a usar. Luego usamos la función ``app.get("/hola")`` para que controle esa dirección por GET y que devuelva una respuesta en json con `res.json({ contenido })`, y otra mas que use un parámetro para que devuelva una respuesta personalizada.
Una vez creada la lógica del controlador, usamos `app.listen()` y le pasamos el puerto y la IP (usando *0.0.0.0* para que use la del dispositivo).

En el **Dockerfile**, copiamos ambos archivos, exponemos el puerto y ejecutamos el comando de inicio.

# Spring para Java
Descargamos un proyecto de Java de Spring y lo abrimos usando **IntelliJ**. En este añadimos una clase controlador con el *hola mundo* en la carpeta `src/main/java/com/example/demo` junto al resto del código principal.

Una vez programado la aplicación web, usamos el apartado de **Maven** de ItelliJ y compilamos el proyecto a un archivo.war. También creamos un archivo de configuración de Tomcat con el puerto modificado a **8003**, ya que cambiar la configuración del proyecto no cambio nada (hasta que decidimos cambiar la de Tomcat y funciono).

Con todos los archivos preparados, creamos un **Dockerfile** desde Tomcat, añadimos el archivo del proyecto.war, sustituimos el archivo de configuración y exponemos el puerto **8003**.

# Unir todo con docker-compose

Una vez tenemos los tres servidores y el servidor de proxy inverso que redirija a sus puertos correspondientes despegamos todo junto usando un archivo `docker-compose.yml`.

En este hemos puesto los servicios `gunicorn`, `nodejs` y `spring`, mapeando los puertos y usando el parámetro `build:` para que reconstruya la imagen automáticamente al desplegar toda la aplicación de golpe.

En Apache repetimos el proceso, pero añadiendo dependencia a los tres servicios anteriores (usando `depends_on:`) para que espere a los otros tres y se ejecute el ultimo

# Infografía
[stackoverflow](https://stackoverflow.com) como ayuda general

[guia express](https://expressjs.com/en/guide/routing.html) para como usar express

[generador de proyectos de spring](https://start.spring.io)
[la solucion del puerto de Java](https://stackoverflow.com/questions/18415578/how-to-change-apache-tomcat-web-server-port-number) (tambien ayudo ChatGPT para explicarnos mejor que estabamos configurando)
