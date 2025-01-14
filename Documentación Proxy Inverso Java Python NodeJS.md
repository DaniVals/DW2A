# Introducción
# No se hacerlo Iván aiuda

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

En el Dockerfile copiamos el sitio.conf, exponemos el puerto **80** e iniciamos la aplicación.

Ahora solo nos queda crear los tres sitios web

# Gunicorn para Python
Creamos un archivo app.py, en el que usamos Flask para detectar las diferentes rutas del proyecto, dentro de las funciones de cada ruta, hemos usado Jsonify para devolver un .json como respuesta. Luego usamos Flask otra vez para iniciar la app en el puerto **8001**.

También necesitaremos el archivo ``requirements.txt`` y especificamos la versión de Gunicorn y de Flask.

Para acabar, creamos el archivo Dockerfile, copiamos los archivos, especificamos la ruta de la app, instalamos las dependencias, exponemos el puerto **8001** y ejecutamos la aplicación.

# NodeJS para JavaScript


# Spring para Java
Descargamos un proyecto de Java de Spring y lo abrimos usando IntelliJ. En este añadimos una clase controlador con el *hola mundo* en la carpeta `src/main/java/com/example/demo` junto al resto del código principal.

Una vez programado la aplicación web, usamos el apartado de Maven de ItelliJ y compilamos el proyecto a un archivo.war. También creamos un archivo de configuración de Tomcat con el puerto modificado a **8003**, ya que cambiar la configuración del proyecto no cambio nada (hasta que decidimos cambiar la de Tomcat y funciono).

Con todos los archivos preparados, creamos un Dockerfile desde Tomcat, añadimos el archivo del proyecto.war, sustituimos el archivo de configuración y exponemos el puerto **8003**.

# Unir todo con docker-compose

Una vez tenemos los tres servidores y el servidor de proxy inverso que redirija a sus puertos correspondientes despegamos todo junto usando un archivo `docker-compose.yml`.

En este hemos puesto los servicios `gunicorn`, `nodejs` y `spring`, mapeando los puertos y usando el parámetro `build:` para que reconstruya la imagen automáticamente al desplegar toda la aplicación de golpe.

En Apache repetimos el proceso, pero añadiendo dependencia a los tres servicios anteriores (usando `depends_on:`) y usamos `volumes:` para ¿?

## (Iván revisa esto del ``build`` que no estoy segura de si es asi)
## Also, que es lo de ``volumes``?

# Infografía
[stackoverflow](https://stackoverflow.com) como ayuda general



[generador de proyectos de spring](https://start.spring.io)
[la solucion del puerto de Java](https://stackoverflow.com/questions/18415578/how-to-change-apache-tomcat-web-server-port-number) (tambien ayudo ChatGPT para explicarnos mejor que estabamos configurando)
