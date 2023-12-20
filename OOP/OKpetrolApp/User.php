<?php
    class User {
        private $userId;
        private $userName;
        private $userProfile;
        private $userPhone;
        private $userEmail;
        private $userPassword;

        function setuserId($userId) {  
            $this->userId = $userId;
        }

        function getuserId() {  
            return $this->userId;
        }

        function setuserName($userName) {  
            $this->userName = $userName;
        }

        function getuserName() {  
            return $this->userName;
        }

        function setuserProfile($userProfile) {  
            $this->userProfile = $userProfile;
        }

        function getuserProfile() {  
            return $this->userProfile;
        }

        function setuserPhone($userPhone) {  
            $this->userPhone = $userPhone;
        }

        function getuserPhone() {  
            return $this->userPhone;
        }

        function setuserEmail($userEmail) {  
            $this->userEmail = $userEmail;
        }

        function getuserEmail() {  
            return $this->userEmail;
        }

        function setuserPassword($userPassword) {  
            $this->userPassword = $userPassword;
        }

        function getuserPassword() {  
            return $this->userPassword;
        }
    }
?>