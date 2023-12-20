<?php
    require_once "Manager.php";

    $taskList = new TaskList();
    $taskList->addTask("1", "Study", "Done");
    $taskList->addTask("2", "Workout", "Undone");

    foreach($taskList->getTaskList() as $task) {
        echo (
            $task->id . "." . 
            $task->task . "," .
            $task->status . "<br>");
    }
?>