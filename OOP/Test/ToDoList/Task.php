<?php
    class Task {
        public $id;
        public $task;
        public $status;

        public function __construct($no, $task, $status) {
            $this->id = $no;
            $this->task = $task;
            $this->status = $status;
        }
    }
?>