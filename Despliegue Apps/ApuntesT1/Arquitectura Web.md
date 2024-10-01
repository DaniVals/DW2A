1. Tipos de arquitectura
    Cliente-Servidor

2. Peticiones Web
    = http = 
        - el cliente establece una conexion con el servidor (a traves de la IP)
        - luego le hace una peticion http (Request tipo GET) (tipos = get / post / put / delete)
        - le devuelve lo solicitado (una pagina web por el puerto 80)
        - se cierra la conexion

    = https = (igual que http pero con una capa de seguridad)

3. Como sabe donde ir
    a traves del DNS (Domain Name Services)
    traduce nombres de dominio (google.com) a IP (123.45.67.89)
    ANTES de pedir al DNS la dirreccion, mira el archivo /etc/hosts
    {
        GNU nano
        T127.0.0.1      localhost
        127.0.1.1       daw.daw.daw.daw daw
        # Ejemplo de DNS (la ip es la por defecto de la maquina virtual)
        10.2.0.15       yo

        # The following lines are desirable for IPv6 capable host
        ::1     localhost ip6-localhost ip6-loopback
        ff02::1 ip6-allnodes
        ff02::1 ip6-allrouters
    }

4. Que compone una pagina web?
    frontend (facilita el entorno cliente)
        - HTML
        - CSS
        - JS

    backend (el servidor)
        - el servidor que hostea la pagina web (con apache2)
        - la base de datos
        - el traductor de php/ python

5. Contenedor
    Los contenedores es una aplicacion, su objetivo es virtualizar servicios, algo que cuando le solicitemos vaya a funcionar
    Estan pensados para configurarse una vez y no volver a tocarlos mas
    = docker = 
        la aplicacion que permite configurar contenedores
        el server de apache de linux de docker se llama httpd
        se enciende con el comando:
        docker run -p {81}:80 (esto para cambiar el puerto del original a otro) -d (para ejecutarlo en segundo plano) --name nombre (darle un nombre, si no le da uno aleatorio) httpd (el nombre del contenedor)

        docker ps (para ver los contenedores activos)
        (pregunta de empresa, ¿sabrias crear un contenedor de esta aplicacion que tenemos nosotros?)
