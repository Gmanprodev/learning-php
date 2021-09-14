<?php

$tasks = $app['database']->selectAll('tasks');

$username = $_POST['username'];
$password = $_POST['password'];

$user = $app['database']->raw('select * from users where username = '. $username .' and password '. $password);

var_dump($user);

if ($user) {
    session_start();
    $_SESSION['user'] = $user;

    require 'views/dashboard.view.php';
}


require 'views/login.view.php';