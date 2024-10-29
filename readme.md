# Kadre - MyIntelli  / Test

* Version PHP utilizada para realizar el test: 7.4
* Version Laravel utilizada para realziar el test: Lavavel 5.8
* Base de datos utilizada: PostgreSQL

## Almacenamiento Usuario desde API
* Ingresando a la **ruta ' / ' desde el navegador o enviando una peticion GET via api**, una vez iniciado el proyecto a traves de php artisan serve, el proyecto realiza una peticion POST al endpoint de myintelli, en el cual guarda dentro de la tabla estipulada la informacion del usuario devuelta por la API.

## Ejecucion del comando para generar informacion de los widgets del Usuario
* El comando fue denominado de manera arbitraria con el signature de: "fill:userwidgets", al realizar su ejecutacion a traves del comando: **php artisan fill:userwidgets**, se obtiene la informacion almacenada del usuario previamente y se almacena dentro de la tabla User Intelli Widgets la informacion de widgets que posee el usuario, realizando una relacion entre ambas tablas en cada guardado.

