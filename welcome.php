<?php
session_start();

if(!isset($_SESSION["username"])){
    echo "Please Login. <a href='https://localhost/learn/login.php'>Click Here to Login</a>";
    // header("Location: https://localhost/learn/login.php");
    // die();
}
else{
    echo "Welcome, " .$_SESSION["username"];
    echo "<a href='https://localhost/learn/logout.php'>Logout</a>";
}