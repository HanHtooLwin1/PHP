<?php
    //conctruct() function is called when creat an object
    class Fruit {
        public $name;
        public $color;

        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        function get_name() {
            return $this->name;
        }

        function get_color() {
            return $this->color;
        }
    }

    $apple = new Fruit("apple", "red");
    echo "fruit: " . $apple->get_name() . "<br>";
    echo "color: " . $apple->get_color() . "<br>";
?>