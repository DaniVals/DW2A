[[Apuntes Despliegue|Home]]
# Tipos de arquitectura
Cliente-Servidor =
- escalabilidad a nivel de servidor
- tienes que tener tu un servidor y mantenerlo

= Micro servicios =
- ventaja si se cae uno no afecta al resto
- desventaja dificil la comunicacion entre ellos puede ser dificil y generar latencia

= Serverless =
- ventaja reduce los costos iniciales y las tareas de mantenimiento (te lo hacen xd)
- desventaja necesitas una nube (Azure, AWS...)

= Single Page App = (ejemplo apple)
- es barato
- es mucho JS




= escalabilidad a volumen de peticiones =
poder pasar de un maximo de 1000 de solicitudes a 25000 solicitudes

= escalabilidad a volumen de datos =
poder gestionar mas datos de forma sencilla sin modificar mucho el codigo (abrir un nuevo contenedor por ejemplo) (balanceador de carga)

# Peticiones Web
= http = 
- el cliente establece una conexion con el servidor (a traves de la IP)
- luego le hace una peticion http (Request tipo GET) (tipos = get / post / put / delete)
- le devuelve lo solicitado (una pagina web por el puerto 80)
- se cierra la conexion

= https = (igual que http pero con una capa de seguridad)

# Como sabe donde ir
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

# Que compone una pagina web?
frontend (facilita el entorno cliente)
- HTML
- CSS
- JS

backend (el servidor)
- el servidor que hostea la pagina web (con apache2)
- la base de datos
- el traductor de php/ python

# Contenedor
Los contenedores es una aplicacion, su objetivo es virtualizar servicios, algo que cuando le solicitemos vaya a funcionar
Estan pensados para configurarse una vez y no volver a tocarlos mas
Son como mini maquinas viruales

= docker = 
la aplicacion que permite configurar y gestionar contenedores
el server de apache de linux de docker se llama httpd

(pregunta de empresa, ¿sabrias crear un contenedor de esta aplicacion que tenemos nosotros?)
- [ ] Preguntar al profe donde poner la descripcion de docker en T1 o T2
