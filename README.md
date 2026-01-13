## Descripción



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


## Ejemplos de uso



## APIs Externas
1- [Resend](https://resend.com/docs/send-with-laravel).: Api para envio externo de emails.


