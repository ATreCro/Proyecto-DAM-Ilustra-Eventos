## Descripción
Este proyecto consiste en el desarrollo de una aplicación web para la gestión de pedidos de ilustraciones personalizadas, implementada con Laravel 11 y basada en la arquitectura Modelo–Vista–Controlador (MVC). El objetivo principal ha sido crear una plataforma funcional y segura que permita a los usuarios realizar pedidos y a los administradores gestionarlos de forma eficiente.
Como resultado, se ha obtenido una aplicación completa con sistema de autenticación, control de roles, gestión de pedidos, validación de formularios, envío de correos electrónicos y administración de contenidos. El proyecto demuestra la viabilidad de la solución propuesta y sienta las bases para futuras ampliaciones, como la incorporación de nuevos roles, pasarelas de pago o mejoras en la experiencia de usuario.



## Requerimientos
1- Php >= 8.3

2- Composer >= 2.x 

3- Servidor Apache

4- Servidor MySQL



### Pasos para el despliegue

1-  git clone [URL]

2-  cp .env.example .env

3-  Create Database 'ilustraevento_bd' and set DB_DATABASE into .env

4-  composer install

5-  php artisan migrate

6-  php artisan db:seed

7-  php artisan storage:link


## APIs Externas
1- [Resend](https://resend.com/docs/send-with-laravel).: Api para envio externo de emails.


