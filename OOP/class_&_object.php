<?php
    class Student {
        public $name;
        public $id;
        public $phone;

        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        function set_id($id) {
            $this->id = $id;
        }
        function get_id() {
            return $this->id;
        }
        function set_phone($phone) {
            $this->phone = $phone;
        }
        function get_phone() {
            return $this->phone;
        }
    }


    $mgmg = new Student();
    $mgmg->set_name("Mg Mg");
    $mgmg->set_id("1");
    $mgmg->set_phone("904324");

    echo "Name: " . $mgmg->get_name() . "<br>";
    echo "ID: " . $mgmg->get_id() . "<br>";
    echo "Phone: " . $mgmg->get_phone() . "<br>";

    // $MgMg = new Student();
    // $MgMg -> name = "Mg Mg";
    // $MgMg -> id = "1";
    // $MgMg -> phone = "34200423";

    // echo $MgMg->name . "<br>";
    // echo $MgMg->id . "<br>";
    // echo $MgMg->phone . "<br>";