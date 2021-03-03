# Proyecto Test en Laravel

Desarrollo de un proyecto de autentificación básico en Laravel 8

## Pre-requisitos

1) Proyecto creado con [Laravel](https://laravel.com/), el cual nos exige una versión moderna de PHP y algunas de sus extensiones instaladas:

```
PHP >= 7.3.1
Composer
```

Para desarrollo y configuración rápida te recomendamos instalar un meta-paquete como XAMPP 
[descargar aquí](https://www.apachefriends.org/download.html). Sólo hay que estar seguros de descargar
XAMPP con PHP 7.3 (recomendado). Esto te instalará MySQL, PHPMyAdmin, Apache y claro un PHP moderno.

2) También necesitaremos composer ([descargar aquí](https://getcomposer.org/)) para descargar las dependencias de [Laravel](https://laravel.com/).

## Instalación para Desarrollo

1) Para levantar el ambiente se debe realizar las siguientes configuraciones y ejecución de pasos. 

### Configuración del Proyecto

a) Ingresar al archivo **.env** ubicado en la raíz del proyecto

b) Modificar los datos de las siguientes variables para conectarse a la base de datos.
```
DB_CONNECTION=mysql    //Tipo de Base de Datos
DB_HOST=127.0.0.1      //Host de Base de Datos
DB_PORT=3306		   //Puerto de la Base de Datod
DB_DATABASE=test       //Nombre Base de Datos
DB_USERNAME=root       //Usuario Base de Datos
DB_PASSWORD=****       //Contraseña
```
c) Configuración para el envío de correos.
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=******                // Cuenca de Correo Electrónico
MAIL_PASSWORD=******                // Contrase de la cuenta de correo
MAIL_ENCRYPTION=tls 
MAIL_FROM_ADDRESS=************      // Cuenca de Correo Electrónico
MAIL_FROM_NAME="${APP_NAME}"
```
d) Ingresar a un terminal y ejecutar los siguientes comandos para levantar el proyecto.
 
```

# composer install

# php artisan migrate:fresh --seed

# php artisan serve

```