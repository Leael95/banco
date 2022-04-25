Proyecto de Banco, en el cual el usuario podra depositar, extraer, enviar dinero, en el cual tambien tendra un historial de transacciones. Solo el usuario que se pueda logear va a poder realizar acciones correspondientes, ningun otro usuario va a poder hacerlo.

Herramientas a utilizar:
-HTML5
-CSS3
-Javascript
-MySQL Ver 14.14 Distrib 5.7.24
-PHP 8.0.2

Frontend:
- El usuario tendra que logear para poder ingresar a su cuenta, y asi poder realizar las operaciones correspondientes.
- El usuario al no tener cuenta, puede registrarse y asi poder formar parte del banco.
- El usuario una vez dentro de la plataforma, tendra 4 opciones, y estas van a figurar en forma de botones grandes en el medio, y aca podra depositar, extraer, enviar dinero y ver el historial de transacciones
- En el inicio figurara el monto total de la cuenta al momento actual
- Al realizar alguna operacion el monto del inicio cambiara
- El historial de transaccion tendra solo las ultimas 10 operaciones, tambien se podra filtrar por operacion, hasta un maximo de 10
- Al poner el monto del ingreso, egreso o envio del dinero, con Javascript se mostrara la cantidad de dinero que le quedara a la cuenta
- Tendra un boton para deslogear correspondientemente de la cuenta

Backend:
- Validaciones correspondientes para evitar inyecciones
- Rollback para evitar errores
- Si se pone mal la usuario o la contraseña, esto enviara el error de que no se pudo ingresar, ni tampoco se podra ingresar a la pagina principal de la cuenta hasta no estar logeado, siempre redireccionara a la pantalla de login
- Cada operacion del usuario, va a ir en forma de registro hacia el historial de transacciones


Base de Datos:
Base de datos relacional

- La tabla de login tendrá los siguientes campos:
-- Id
-- Usuario
-- Mail
-- Contraseña

- La tabla principal tendra los siguientes campos:
-- Id
-- Nombre
-- Apellido
-- Fecha de Nacimiento
-- Monto ARS (Inicia con $10000)
-- Monto USD

- Tabla de estado de transacciones
-- Id
-- Estado(Deposito, extraccion, envio, cambioUSD , cambioARS)

- Tabla de historial de transacciones
-- ID
-- ID Usuario
-- Estado de transacción (ID de transacciones)
-- Importe que se depositó-extrajo-envio
-- ID persona a la que se le envio si es que existe
-- Si se envio el dinero nombre de la persona a la que se la envio
-- Monto anterior antes del cambio
-- Monto posterior despues del cambio
-- Fecha en el que se realizo el cambio