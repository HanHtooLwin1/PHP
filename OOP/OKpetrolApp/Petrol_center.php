<?php
    require_once 'User.php';
    require_once 'Admin.php';

    class Petrol_center {
        private $id;
        private $town;
        private $name;
        private $doAvaliableNow;
        private $address;
        private $rating;

        function set_id($id) {  
            $this->id = $id;
        }

        function get_id() {  
            return $this->id;
        }

        function set_town($town) {  
            $this->town = $town;
        }

        function get_town() {  
            return $this->town;
        }

        function set_name($name) {  
            $this->name = $name;
        }

        function get_name() {  
            return $this->name;
        }

        function set_doAvaliableNow($condition) {  
            $this->doAvaliableNow = $condition;
        }

        function get_doAvaliableNow() {  
            return $this->doAvaliableNow;
        }

        function set_address($address) {  
            $this->address = $address;
        }

        function get_address() {  
            return $this->address;
        }

        function set_rating($rating) {  
            $this->rating = $rating;
        }

        function get_rating() {  
            return $this->rating;
        }
    }
?>