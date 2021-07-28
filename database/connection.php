<?php

class Connection {
    public static function make() {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=task_manager', 'root', 'Siennanoah100!');
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
}

Connection::make();