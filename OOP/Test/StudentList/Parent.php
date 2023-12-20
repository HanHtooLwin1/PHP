<?php
    class Guardian  {
        public $id;
        public $name;
        public $occupation;
        public $phone;

        function __construct($no, $name, $occupation, $phone) {
            $this->id = $no;
            $this->name = $name;
            $this->occupation = $occupation;
            $this->phone = $phone;
        }

        function getId() {
            return $this->id;
        }

        function getName() {
            return $this->name;
        }

        function getOccupation() {
            return $this->occupation;
        }

        function getPhone() {
            return $this->phone;
        }
    }
    
    $parent1 = new Guardian("1", "U Ba", "Doctor", "934282");
    $parent2 = new Guardian("2", "U Ba Kyaw", "Driver", "234234");

?>