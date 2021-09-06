<?php

$router->get('', 'controllers/index.php');
$router->get('home', 'controllers/index.php');
$router->get('register', 'controllers/register.php');
$router->get('login', 'controllers/login.php');
$router->post('names', 'controllers/add_name.php');
