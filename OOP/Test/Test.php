<?php
    class Task {
        public $no;
        public $name;
        public $status;
    }

    $task1 = new Task();
    $task1->no = "1";
    $task1->name = "A";
    $task1->status = "ToDo";

    $task2 = new Task();
    $task2->no = "2";
    $task2->name = "B";
    $task2->status = "Doing";

    $task3 = new Task();
    $task3->no = "3";
    $task3->name = "C";
    $task3->status = "Done";

    $taskList = array();
    array_push($taskList, $task1);
    array_push($taskList, $task2);
    array_push($taskList, $task3);

    foreach($taskList as $tmpTask) {
        echo $tmpTask->no . ". ";
        echo $tmpTask->name . ", ";
        echo $tmpTask->status . ", ";
        echo "<br>";
    }
?>