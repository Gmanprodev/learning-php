<?php

$tasks = $app['database']->selectAll('tasks');

require 'views/add_tasks.view.php';