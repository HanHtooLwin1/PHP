<?php
    require_once "Task.php";

    class TaskList {
        public $taskList = array();

        public function addTask($no, $task, $status) {
            array_push($this->taskList, new Task($no, $task, $status));
        }

        public function getTaskList() {
            return $this->taskList;
        }
    }


?>