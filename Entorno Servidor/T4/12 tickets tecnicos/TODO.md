[[Entorno Servidor/T4/12 tickets tecnicos/Enunciado]]
# Externo (SQL)
- [ ] Esquema de la base de datos

# Paginas
- [/] Cabecera
- [ ] Funciones

+ [x] index
+ [ ] Log in
+ [ ] Log out
+ [ ] Sign in

- [/] Crear Ticket ``create_ticket``
- [/] Ver tickets -> Modo técnico Y empleado `ticket_list`
- [/] Ver detalles del ticket `ticket`


# Detalles / Aclaraciones
- [ ] Validar formularios (debe tener al menos asunto y descripción, poner que no se acepte a menos que la longitud del asunto sea {3} y de la descripción {10}) (también de paso ponerle máximo a la longitud de la BBDD)
- [ ] ``ticket_list`` tiene que estar ordenado por fecha y hora
- [x] ``ticket_list`` se llama (`<title>`) "mis tickets" en empleado y "lista de tickets" en técnico
- [ ] ``ticket_list`` muestra: el ID, el asunto, el estado y la hora y fecha de creación
- [ ] ``ticket`` se ven TODOS los datos (esto lo miramos con la BD abierta)
- [ ] en ticket SOLO puede responder un técnico, esta limitación se quita si hacemos la ampliación [[#1. Tickets realistas]]

+ [ ] Entregar: Script SQL con toda la BD
+ [ ] Entregar: Codigo completo de la aplicacion
+ [ ] Entregar TXT con ==usuarios y contraseñas== para probar la app Y las ==ampliaciones realizadas==

# Ampliaciones
(no se pueden poner checklist y títulos a la vez, tachar a mano)
No apunto nada por ahora y copio los detalles de la que nos llame la atención
### 1. Tickets realistas
### 2. Buscador de tickets
### 3. Registro
### 4. Contraseña cifrada
### 5. Adjuntar archivos
### 6. Valoración de técnicos
### 7. Perfiles
### 8. Foto personal
### 9. Cerrar cuenta
### 10. Recuperar contraseña
### 11. Técnicos relajados:
### 12. Prioridad tickets
### 13. Notificación de correo

