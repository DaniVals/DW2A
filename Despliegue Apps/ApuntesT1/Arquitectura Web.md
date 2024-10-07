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




>[!question] escalabilidad a volumen de peticiones 
> poder pasar de un máximo de 1000 de solicitudes a 25000 solicitudes

>[!question]  escalabilidad a volumen de datos 
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

- [ ] esto es igual en todos?


# Que compone una pagina web?
### frontend 
- Facilita el entorno cliente
- HTML / CSS / JS

### backend
- el servidor que hostea la pagina web (con apache2)
- la base de datos
- el traductor de php/ python

# Contenedor
Los contenedores es una aplicación, su objetivo es virtualizar servicios, algo que cuando le solicitemos vaya a funcionar
Están pensados para configurarse una vez y no volver a tocarlos mas
Son como mini maquinas virtuales

## [[Comandos Docker|Docker]] 
la aplicación que permite configurar y gestionar contenedores
El contenedor del server de apache2 de Docker se llama ``httpd``

> [!question] #pregunta_común_de_empresa
> *"¿sabrías crear un contenedor de esta aplicación que tenemos nosotros?"*
> si dices que si (y sabes), mucha probabilidad de ser contratado

- [ ] Preguntar al profe donde poner la descripcion de docker en T1 o T2
- [ ] que arquitectura es Docker?
