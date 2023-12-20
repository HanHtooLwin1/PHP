<?php
    class Fruit {
        public $name;
        public $color;

        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        function __destruct() {
            echo "This fruit is {$this->name} and {$this->color} color.<br>";
        }
    }

    $apple = new Fruit("apple", "green");
    $apple = new Fruit("banana", "yellow");
    $apple = new Fruit("orange", "orange");

?>