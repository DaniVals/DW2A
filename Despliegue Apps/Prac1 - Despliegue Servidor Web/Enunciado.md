## Despliegue servidor web

El objetivo de esta tarea es que el estudiante demuestre su capacidad para instalar, configurar e instalar un servidor web y desplegar en este dos aplicaciones web desarrolladas en PHP. Además, para asegurar que el despliegue se puede realizar en cualquier entorno, será estrictamente necesario que la aplicación esté contenerizada con Docker. Para ello, se deberá construir un servidor web que corra en un contenedor de Docker, basado en una imagen de Ubuntu, que incluya las siguientes características:

1. Servidor web con soporte para PHP.
2. Base de datos MariaDB.
3. Creación automática de una base de datos y carga de datos en MariaDB al arrancar el contendor.
4. Configuración de sitios virtuales.
5. Configuración HTTPS mediante la obtención e instalación de un certificado digital.

### Especificaciones del Proyecto

1. **Dockerfile**:  
    - Deberás crear un archivo Dockerfile que utilice Ubuntu como imagen base.
    - El Dockerfile deberá incluir las instrucciones necesarias para instalar y configurar:
        - Un servidor web Apache con soporte para PHP.
        - MariaDB como gestor de bases de datos. 
        - Certificados SSL para habilitar HTTPS.
        - Módulos adicionales de PHP y del servidor web, si fuera necesario.
2. **Instalación de paquetes y servicios**:
    - El Dockerfile debe instalar Apache, PHP, [MariaDB](https://mariadb.com/es/resources/blog/try-mariadb-server-10-3-in-docker/) y las extensiones de PHP para poder interactuar con la base de datos (ie: pdo pdo_mysql)
    - Debes asegurar que tanto el servidor web como MariaDB estén configurados para arrancar automáticamente cuando se inicie el contenedor.
3. **Creación y carga de una base de datos**:  
    - Debes crear una base de datos sencilla en MariaDB al arrancar el contenedor. Esto se puede lograr cargando un archivo SQL durante la configuración de MariaDB.
    - El archivo SQL debe crear una tabla de ejemplo y poblarla con algunos registros.
    - La base de datos debe estar disponible para ser consultada desde scripts PHP que se ejecuten en el servidor web.
4. **PHP y Base de datos**:
    - El servidor web debe poder procesar scripts PHP y conectarse a la base de datos MariaDB.
    - Debes implementar un pequeño script PHP que realice una consulta a la base de datos y muestre los resultados en el navegador. El script podría listar los usuarios de una tabla o realizar cualquier otra operación básica.
5. **Sitios virtuales:**  
    - Configura al menos dos sitios, uno que muestre la página vinculada a la base de datos y otro que muestre hasta el número 100 de la serie de Fibonacci.
    - La primera se deberá llamar dawdb2.com y la segunda fibonacci100.com.
    - Ambas deben de ser accesibles por el puerto 80 o 443, pero en caso de que se realice una petición al puerto 80 se debe de redireccionar al 443.
    - Los sitios deben ser accesibles de manera separada y correcta desde el exterior.
6. **Certificados y HTTPS**:
    - Debes obtener e instalar certificados digitales válidos para los sitios virtuales configurados, de manera que las conexiones puedan realizarse mediante HTTPS.
7. **Seguridad y acceso**:
    - Implementa un mecanismo de autenticación para restringir el acceso a determinadas secciones de uno de los sitios virtuales.
8. **Documentación del proceso**:
    - Debes proporcionar una documentación completa que incluya:
        - Los pasos detallados para construir la imagen Docker a partir del Dockerfile.
        - Explicación detallada de que se hace en cada línea del Dockerfile.
        - Como ejecutar el contenedor y acceder a los sitios virtuales.
        - Explicación detallada de la configuración realizada.
        - Instrucciones para realizar pruebas de conexión entre el servidor web y MariaDB.
        - Errores que te hayan dado a lo largo de la práctica y como los solucionaste.
        - Como sería desplegar la web fibonacci.com en una imagen [php](https://hub.docker.com/_/php).

### Criterios de Evaluación

- **(1.25%) RA1CEc. Se ha realizado la instalación y configuración básica de servidores web.**
- **(3.125%) RA1CEf. Se han realizado pruebas de funcionamiento de los servidores web y de aplicaciones.**
- **(1.875%) RA2CEb. Se ha ampliado la funcionalidad del servidor mediante la activación y configuración de módulos.**
- **(2.5%) RA2CEc. Se han creado y configurado sitios virtuales.**
- **(1.25%) RA2CEd. Se han configurado los mecanismos de autenticación y control de acceso del servidor.**
- **(1.25%) RA2CEe. Se han obtenido e instalado certificados digitales.**
- **(1.25%) RA2CEf. Se han establecido mecanismos para asegurar las comunicaciones entre el cliente y el servidor.**
- **(1.25%) RA2CEh. Se ha elaborado documentación relativa a la configuración, administración segura y recomendaciones de uso del servidor.**