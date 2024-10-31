### **Objetivo**

Este proyecto consiste en realizar página de soporte técnico, donde los empleados de una empresa envían solicitudes (o tickets) de soporte a técnicos. 

[Aquí](https://www.hesk.com/demo.php) tienes un ejemplo de la funcionalidad.

La aplicación se desarrollará en grupo, usando PHP, MySQL y Mailtrap (en caso de que proceda).

### **Funcionalidad básica** (máximo 6 puntos)

Cuando un ticket se abre, está en estado "creado". Posteriormente, cualquier técnico puede responder al ticket con un mensaje (ejemplo: "Te hemos pedido una nueva batería para tu portátil, te la enviamos a tu edificio el lunes.") y cambiar el estado a "solucionado", "en proceso" o "cerrado".

Las vistas de la aplicación son:

- Acceso: los usuarios acceden a la aplicación con su email y contraseña, que se almacenan en una base de datos. Hay dos tipos de usuario: los empleados y los técnicos.  
      
    
- Crear nuevo ticket: contiene un formulario donde el empleado puede abrir uno. Al menos se pide el asunto y la descripción.  
      
    
- Mis tickets: el empleado ve una lista con todos los tickets de soporte que ha creado, ordenados por fecha y hora. Se ve, el ID, el asunto, el estado y la hora y fecha de creación. Los técnicos no disponen de esta vista.  
      
    
- Lista de tickets: los técnicos ven todos los tickets que hay en la empresa, de forma que puedan seleccionar uno y resolverlo, ordenados por fecha y hora de creación. Se ve, al menos, el ID, el asunto, el estado y la hora y fecha de creación. Los empleados no disponen de esta vista.  
      
    
- Detalle de ticket: cuando se pulsa en uno de los tickets, se pueden ver todos los datos aquí. Si se es técnico, se puede cambiar el estado y dejar 1 mensaje.

### **Ampliaciones** (máximo 0,8 cada una)

1. Tickets realistas **(si no se realiza esta ampliación, el máximo a obtener será 8 puntos)**:
    - Se quita la limitación de que solo hay 1 respuesta de un técnico en el ticket.
    - Ahora, tanto el empleado que creó el ticket como cualquier técnico pueden escribir los mensajes que quieran.
2. Buscador de tickets:
    - Los técnicos disponen de un buscador donde pueden poner una palabras.
    - Se busca en la descripción de los tickets esas palabras.
    - El resultado son los tickets que contienen esas palabras (por ejemplo, una lista de enlaces a ellos).
3. Registro:
    - Proceso realista para que un usuario se registre en la aplicación.
    - Como hay dos tipos de usuario, puedes saber cuál es cuál sabiendo que los empleados tienen un email terminado @empresa.com y los técnicos en @soporte.empresa.com.
    - Para conseguir la puntuación completa, tiene que incluir un correo con un link de activación.
4. Contraseña cifrada:
    - Almacenar las contraseñas de acceso de los usuarios cifradas en la base de datos.
    - Pista: `password_hash` y `password_verify`.
5. Adjuntar archivos:
    - Los empleados pueden adjuntar un archivo al crear un ticket.
    - Desde el detalle de ticket, puede descargarse posteriormente.
6. Valoración de técnicos:
    - Los empleados pueden valorar a los técnicos, poniéndoles una puntuación (por ejemplo, de 0 a 5 estrellas).
    - Tanto los empleados como los técnicos pueden ver la valoración media de los técnicos.
7. Perfiles:
    - Cada usuario podrá añadir (y modificar) cierta información sobre sí mismo en su perfil (por ejemplo, el teléfono, nombre, departamento, etc.).
    - Los técnicos pueden ver esta información.
8. Foto personal
    - Los empleados y técnicos podrán subir una imagen para utilizarla como foto.
    - Se debe mostrar en algún sitio de la aplicación (por ejemplo, a la hora de ver el ticket, junto al nombre).
    - También se puede quitar.
9. Cerrar cuenta:
    - Los empleados podrán darse de baja de la plataforma si quieren.
    - Para conseguir la puntuación completa, tiene que incluir un correo con un link que verifique el borrado.
10. Recuperar contraseña:
    - Proceso realista para que los usuarios puedan recuperar su contraseña de acceso o generar una nueva.
    - Si la solución consiste en enviar una nueva contraseña (o la actual), sin tener que realizar más operaciones, solo se obtendrá la mitad de la puntuación.
11. Técnicos relajados:
    - Para reducir la carga de trabajo de los técnicos, cada empleado no podrá abrir nuevos tickets si tiene ya 3 abiertos (es decir, que no estén en "cerrado").
12. Prioridad tickets:
    - Los técnicos establecen una prioridad a los tickets (por ejemplo, "baja", "media", "urgente", o lo que te inventes).
    - En la lista de tickets, los más prioritarios aparecen más arriba que el resto, pero siguen estando ordenados por fecha.
13. Notificación de correo:
    - Se notifica al empleado de que ha abierto un ticket por correo electrónico.
    - Igualmente, cada vez que cambia el estado, se le avisa.

### **Entregables**

- Script SQL para crear la base de datos. Puedes generarlo fácilmente con phpMyAdmin, usando el menú superior de "Exportar". Eso sí, asegúrate de que incluye la sentencia `CREATE DATABASE`... en él.
- Código completo de la aplicación.
- TXT con los usuarios y contraseñas para pode probar la aplicación + qué ampliaciones se han realizado.
- Solo en caso de desacuerdo, documento con el reparto de tareas que se ha hecho en el grupo.

### **Calificación**

- Máximo: 10 puntos.
- Funcionalidad básica: 6 puntos máximo.
- Cada ampliación: 0,8 puntos máximo.

Ten en cuenta:

- Si no se realiza la funcionalidad básica o no funciona correctamente, no se corregirán las ampliaciones.
- La calificación es la misma para todos los miembros del grupo.
- Puedes hacer las ampliaciones que quieras y se irán acumulando para la nota.

Criterios de corrección:

- Funcionalidad, cumplimiento de requisitos y usabilidad.
- Seguridad, acceso, control de errores y gestión de casos de uso.
- Documentación y datos de ejemplo.
- Comentarios, limpieza y calidad del código.

### **Normas de entrega**

- A través del aula virtual.
- Antes de la fecha límite.
- Cada miembro debe subir el trabajo por separado para ser puntuado.
- No se corregirán los trabajos subidos.
- Un fichero ZIP o RAR con todo el código.