# Tipos de arquitectura
### Cliente-Servidor
- escalabilidad a nivel de servidor
- tienes que tener tu un servidor y mantenerlo
- Ejemplo: Apache2

### Micro servicios 
- ventaja si se cae uno no afecta al resto
- desventaja difícil la comunicación entre ellos puede ser difícil y generar latencia

### Serverless 
- ventaja reduce los costos iniciales y las tareas de mantenimiento (te lo hacen xd)
- desventaja necesitas una nube (Azure, AWS...)

### Single Page App  
- es barato
- es mucho JS
- Ejemplo: pagina de Apple




>[!info] escalabilidad a volumen de peticiones 
> poder pasar de un máximo de 1000 de solicitudes a 25000 solicitudes

>[!info]  escalabilidad a volumen de datos 
>poder gestionar mas datos de forma sencilla sin modificar mucho el código (abrir un nuevo contenedor por ejemplo) (balanceador de carga)

# Peticiones Web
### http  
- el cliente establece una conexión con el servidor (a través de la IP)
- luego le hace una petición http (Request tipo GET) (tipos = get / post / put / delete)
- le devuelve lo solicitado (una pagina web por el puerto 80)
- se cierra la conexion

### https 
- igual que http pero con una capa de seguridad

# Como sabe donde ir
a traves del **DNS** (Domain Name Services)
traduce nombres de dominio (google.com) a IP (123.45.67.89)
ANTES de pedir al DNS la dirreccion, mira el archivo /etc/hosts
```
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
```

>[!done] Pregunta: esto es igual en todos?
>Si


# Que compone una pagina web?
### frontend 
- Facilita el entorno cliente
- HTML / CSS / JS

### backend
- el servidor que hostea la pagina web (con apache2)
- la base de datos
- el traductor de php / python

# Contenedor
![[Definiciones Docker#Contenedor]]

# Docker
![[Definiciones Docker#Que es Docker]]
El contenedor del server de apache2 de Docker se llama ``httpd``