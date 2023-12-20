<?php
    class Admin {
        private $adminId;
        private $adminName;
        private $adminProfile;
        private $adminPhone;
        private $adminEmail;
        private $adminPassword;
    }

    function setadminId($adminId) {  
        $this->adminId = $adminId;
    }

    function getadminId() {  
        return $this->adminId;
    }

    function setadminName($adminName) {  
        $this->adminName = $adminName;
    }

    function getadminName() {  
        return $this->adminName;
    }

    function setadminProfile($adminProfile) {  
        $this->adminProfile = $adminProfile;
    }

    function getadminProfile() {  
        return $this->adminProfile;
    }

    function setadminPhone($adminPhone) {  
        $this->adminPhone = $adminPhone;
    }

    function getadminPhone() {  
        return $this->adminPhone;
    }

    function setadminEmail($adminEmail) {  
        $this->adminEmail = $adminEmail;
    }

    function getadminEmail() {  
        return $this->adminEmail;
    }

    function setadminPassword($adminPassword) {  
        $this->adminPassword = $adminPassword;
    }

    function getadminPassword() {  
        return $this->adminPassword;
    }
?>