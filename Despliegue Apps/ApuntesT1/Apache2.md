# Que es apache2?
Una aplicación de código abierto que habilita a tu maquina un servidor web modular, esto significa que se puede añadir módulos para cubrir diferentes necesidades.

Permite abrir diferentes paginas web en un mismo apache, e incluso en un mismo puerto



### estado de apache
El comando que permite gestionar el estado de apache (y mas servicio)

```bash
systemctl { status | start | restart | stop | reload } apache2
```

### Puertos
Los puestos se configuran en este archivo, puedes añadir mas en cada sección poniendo en una nueva linea de `Listen [numero]`

**`ports.conf`**
```conf
# puerto de http
Listen 80

# puerto de ssl
<IfModule ssl_module>
	Listen 443
</IfModule>

<IfModule mod_gnutls.c>
	Listen 443
</IfModule>
```

## Como habilitar sitios web?
Se crea un archivo de configuración para esa pagina web `[nombre].conf` y se guarda en la carpeta `/etc/apache2/sites-aviable/` que es la carpeta que guarda **todas** las configuraciones de **todas** las paginas web.

Luego se habilita copiándolo en la carpeta `etc/apache2/sites-enabled/` que indica las paginas activas y abiertas, esto se puede hacer a través de los comandos:
```bash
a2ensite [nombre archivo configuracion]  # activa
a2dissite [nombre archivo configuracion] # desactiva

## da igual si pones la extensión o no
## si da error, usa sudo, que puede dar problemas por ello

# ---- Ejemplos ----
## a2ensite 000-default
## a2dissite 000-default.conf
```

Por defecto, existe un archivo de configuración llamado `000-default.conf`.

### Parámetros de configuración
Los parámetros vistos para un archivo, (`# obligatorio / ## opcional`)

```conf
<VirtualHost *:[numero]>
# indicamos el puerto de esta pagina web
# para que redirija cada entrada de ese puerto a este archivo
# tiene que estar activado en el "ports.conf"

# CORREO del propietario
ServerAdmin daniel.vals.simon@gmail.com

# el nombre del dominio
ServerName fibonacci.com

## otro nombre de dominio
ServerAlias www.fibonacci.com

# la carpeta RAIZ de la PAGINA WEB
DocumentRoot /var/www/php/

# direccion de los archivos log, separados por categoria, 
## poner combined al final a partir del segundo
## ${APACHE_LOG_DIR} es una variable de entorno
ErrorLog ${APACHE_LOG_DIR}/[nombre del archivo].error.log
CustomLog ${APACHE_LOG_DIR}/[nombre del archivo].custom.log combined

</VirtualHost>
```
- Despliegue - TODO: meter el `<Directory>`

[[#Ficheros extra]]

## Como habilitar módulos?

Instalar un modulo:
```bash
apt install libapache2-mod-php8.2 # (instalar la version 8.2)
```

Activar y desactivar:
```bash
sudo a2dismod php8.2 # (desactiva un mod, en este caso php8.2)
sudo a2enmod php8.2  #(activa un mod, en este caso php8.2)

## si da error, usa sudo, que puede dar problemas por ello
## te pide reiniciar el server con systemctl
```

- **Módulos base**: Se encargan de las funcionalidades básicas.
- **Módulos multiproceso**: Encargados de la unión de los puertos de la máquina, aceptando las peticiones y atendiéndolas.
- **Módulos adicionales**: Se encargan de añadir funcionalidad al servidor.

El **archivo binario ``httpd``** contiene un conjunto de módulos que han sido compilados.

## Ficheros extra

### Fichero de configuración
`etc/apache2/apache2.conf`

>[!done] Pregunta: de donde viene `etc`?
>es la carpeta con los archivos de configuración, tienes una chuleta [[Path CheatSheet.png| aquí]]
>(por norma general, las configuraciones se guardan en `etc/[nombre aplicacion]`)

### variables de entorno
`etc/apache2/envvars`

### Logs
Donde están los logs de apache?
`var/logs/apache2/`

>[!info] como descubrir esa dirección?
mirando ficheros de configuración 
`134:` `ErrorLog ${APACHE:LOG:DIR}/error.log`


## SSL y HTTPS

Crear un certificado
```bash
openssl req -x509 -newkey rsa:4096 -keyout key.pem -out cert.pem -sha256 -days 365
```

Te pide un montón de datos para crear aleatoriedad
Te pide un PEM (una contraseña de uso) `contraseña: cont`

El certificado firma y encripta la conexión y devuelve la llave

(este apartado esta un poco incompleto ngl)

---

- [ ] Despliegue: Repasar apache2