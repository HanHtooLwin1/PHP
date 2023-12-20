<html>
<body>

<?php
session_start();

if(isset($_SESSION["username"])){
    echo "Already Login";
    return;
}
?>

<form action="handle_login.php" method="get">
Name: <input type="text" name="username"><br>
Password <input type="password" name="password"><br>
<input type="submit">
</form>

</body>
</html> 