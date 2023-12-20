<?php 
    $x = "Hello";
    $y = "World";

    function greeting() {
        $GLOBALS["z"] = $GLOBALS["x"] . $GLOBALS["y"];
    }

    greeting();
    echo $z;
?>