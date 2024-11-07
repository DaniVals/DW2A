# 10 - Oct
Visteis los apuntes? (no xd)
esto es lo que sale en los apuntes

%% # Menú del dia %%
## repaso de ficheros

### Fichero de configuración
donde están los ficheros de configuración
`etc/apache2/`
Principal `etc/apache2/apache2.conf`
(por norma general, las configuraciones se guardan en `etc/[nombre aplicacion]`)

>[!done] Pregunta: de donde viene `etc`?
>es la carpeta con los archivos de configuración, tienes una chuleta aquí ![[Path CheatSheet.png]]


### Variables de entorno
`etc/apache2/envvars` (es un archivo de texto)


### Logs
Donde están los logs de apache?
`var/logs/apache2/`
como descubrir esa dirección?
mirando ficheros de configuración
`134:` `ErrorLog ${APACHE:LOG:DIR}/error.log`

--- 
%% salto de pagina para el PDF %%

### Donde se configuran los sitios web?
`etc/apache2/sites-enabled` (la configuración de los archivos que se pueden usar y cargar)
`etc/apache2/sites-aviable` (la configuración general)

`sites-aviable/000-default.conf` (aquí ponemos los directorios)
Dentro de `000-default.conf`, línea `12:` `DocumentRoot var/www/html` (la configuración de la carpeta padre de la pagina web)


`a2ensite 000-default` (activa un sitio web)
`a2dissite [nombre del sitio]` (desactiva un sitio web)

por eso se guarda en ``sites-enabled`` y ``sites-aviable``, en uno guardas toda la configuración y en otro guardas los que están activados



### Que tenemos que hacer para instalar PHP en apache?
Vamos a instalar -> Debian PHP mod

porque *mod*? pq apache es un programa que hace que tu pc sea un **servidor web modular**

>[!info] Porque se enseña Apache2?
se enseña apache pq es mucho mas modulable y fácil pero se usa mas nginx (30% / 70%), si nos *ponemos las pilas* damos nginx (si nos da tiempo)

Comando: `apt install libapache2-mod-php8.2` (instalar la versión 8.2)
(Consejo del profe: Si quieres instalar otro modulo, buscar en Google *descargar modulo php en apt* y ya)

### activar y desactivar módulos de apache2
(por defecto te activa el modulo)

**hay que poner sudo pq es espacialito** y puede negarse
`sudo a2dismod php8.2` (desactiva un mod, en este caso php8.2)
`sudo a2enmod php8.2` (activa un mod, en este caso php8.2)

--- 
%% salto de pagina para el PDF %%


## creación de sitios

vamos a crear tres paginas web

- web1
- web2
- patata

### creamos la configuración
nos vamos a sites-avaiable
creamos un archivo llamado `web1.conf`

```conf
<VirtualHost *:81>
# todo lo que nos llega al puerto 81, que entre aqui


# quien es el culpable de cuando algo vaya mal XDD
ServerAdmin daniel.vals.simon@gmail.com

# cual es el nombre del dominio
ServerName web1.io

# que carpeta es la padre
DocumentRoot /var/www/web1/

# el alias del server
ServerAlias www.web1.io

# donde se crean los logs
ErrorLog ${APACHE_LOG_DIR}/web1.error.log
CustomLog ${APACHE_LOG_DIR}/web1.custom.log combined

</VirtualHost>
```

si te mandan con puerto 81 y nombre web1.io te manda al web1.io
pero si te manda al puerto 81 y el nombre web2.com, va al web2.com

primero el DNS busca el nombre de la ip, luego ya busca el puerto

si no le pasas nada(ni puerto ni nombre, solo la ip) se mete al 000-default AUNQUE ESTE DESACTIVADO

### creamos la propia carpeta
`mkdir /var/www/web1` y le damos permisos (para que apache pueda leerlo) `chmod 777 /var/www/web1` (777 le da todos los permisos a todo el mundo, es poco seguro pero sirve) 
y creamos el archivo `touch /var/www/web1/index.html` y le damos permisos `chmod 777 /var/www/web1/index.html`

### lo añadimos al DNS
modificamos el `etc/hosts`
```conf
T127.0.0.1      localhost
127.0.1.1       daw.daw.daw.daw daw
127.0.0.1       web1.io
# Ejemplo de clase
10.0.2.15       yo

# The following lines are desirable for IPv6 capable hosts
::1     localhost ip6-localhost ip6-loopback
ff02::1 ip6-allnodes
ff02::2 ip6-allrouters
```


---
# 17 - Oct
(repaso de la clase anterior)
## Crear varias paginas web en el mismo puerto
`/etc/apache2/ports.conf` (esto es por lo que no funcionaba el otro día, tienes que habilitar el 81)

Duplicamos el archivo ``web1.conf`` y cambiamos el 1 por 2, 3, 4, 5...

Usamos el comando `sudo a2ensite` y el nombre del archivo de configuración para cada pagina

Acuérdate de crear también la carpeta que contenga los archivos de esa pagina web `var/www/web[n]`

Luego los añadimos al `etc/hosts`


## SSL 


pueden preguntar como crear un certificado
buscar: *generate ssl cert openssl* y te sale en stackoverflow
```bash
openssl req -x509 -newkey rsa:4096 -keyout key.pem -out cert.pem -sha256 -days 365
```

Te pide un montón de datos para sumar extra aleatoriedad
Te pide un PEM (una contraseña de uso) `contraseña: cont`

El certificado firma y encripta la conexión y devuelve la llave