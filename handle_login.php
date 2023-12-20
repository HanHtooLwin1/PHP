<html>
<body>
<?php 
session_start();

if(isset($_SESSION["username"])){
    header("Location: https://localhost/learn/welcome.php");
    die();
}

if(isset($_GET["username"]) && isset($_GET["password"])){
    if($_GET["username"] == "hanhtoo" && $_GET["password"] == "asdf"){
        $_SESSION["username"] = $_GET["username"];
            
        header("Location: https://localhost/learn/welcome.php");
        die();
    }
    else{
        echo "Wrong Info";
    }
}

?>

</body>
</html> 