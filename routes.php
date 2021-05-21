<?php

$router->get('', 'App/Http/Controllers/HomeController.php@index');
$router->get('home', 'App/Http/Controllers/HomeController.php');
$router->get('cv', 'App/Http/Controllers/CvController.php');

