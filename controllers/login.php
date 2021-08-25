<?php

$tasks = $app['database']->selectAll('tasks');

require 'views/login.view.php';