<?php

$tasks = $app['database']->selectAll('tasks');

require 'views/register.view.php';