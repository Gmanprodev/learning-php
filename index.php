<?php

class Task {
    protected $category_name;

    protected $task_name;

    protected $task_description;

    protected $due_date;

    protected $created_by;

    public function __construct($category_name) {
        $this->category_name = $category_name;
    }

    public function taskName($task_name) {
        $this->task_name = $task_name;
    }

    public function taskDescription($task_description) {
        $this->task_description = $task_description;
    }

    public function dueDate($due_date) {
        $this->due_date = $due_date;
    }

    public function createdBy($created_by) {
        $this->created_by = $created_by;
    }
}

$task = new Task('work');

$task->taskName('prepare for meeting');

$task->taskDescription('send notes and agenda to team');

$task->dueDate('2021-08-23');

$task->createdBy('marcgull');

var_dump($task);



//require 'index.view.php';

