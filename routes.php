<?php

$router->get('', 'controllers/index.php');
$router->get('home', 'controllers/index.php');
$router->get('register', 'controllers/register.php');
$router->get('login', 'controllers/login.php');
$router->post('signup', 'controllers/add_user.php');
$router->post('practice', 'controllers/practice.php');
