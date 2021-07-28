<?php

function connectToDb() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=task_manager', 'root', 'Siennanoah100!');
    } catch (PDOException $e) {
        die($e->getMessage());
    }    
}

function fetchAllTasks($pdo) {
    $statement = $pdo->prepare('select * from tasks');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}


function dd($data) {
    echo '<pre>';   
    die(var_dump($data));
    echo '</pre>';
}

