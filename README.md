<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Model Controller

### Description

1. Create un nuovo progetto Laravel 9 (dal template)
2. tramite phpMyAdmin create un nuovo database laravel_model_controller
3. inserite le vostre credenziali per il database nel file .env
4. Create un model Movie  
   es. php artisan make:model Movie
5. Create la rotta e un controller che gestirà la rotta / (home) e uno per i libri  
   es. php artisan make:controller PageController
6. All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
7. Stilare il layout nei dettagli con Sass

### BONUS:

Creare rotta, link, aggiungere metodo show al controller, e pagina di dettaglio del movie
