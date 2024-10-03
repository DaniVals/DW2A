# Basicos
### editar un archivo de texto
```bash
nano {nombre_archivo}
```

### servidor de paquetes
Aunque hay mas, **apt** es el mas común y el que viene preinstalado
```bash
apt [opcion] {nombre_paquete}
```


>[!example]+ opción
> **install** (instalar)
> **remove** (desinstalar) 
> **update** (buscar actualizaciones) 
> **upgrade** (actualizar) 

### dar admin
```bash
su
```

### quitar admin
```bash
exit
```

### Listar procesos
```bash
ps aux
```

### Servicios
```bash
systemctl [opcion] {nombre del servicio}
```

>[!example]+ opción
> **status**
> **start**
> **stop** 
> **restart**

---

>[!question] ¿Donde se crea el fichero base de Apache2?
> /var/www/html/index.html

