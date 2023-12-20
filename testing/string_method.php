<?php 
    $city = "Yangon";
    $greeting = "Hello $city";

    echo strlen($city);
    echo "<br>";

    echo str_word_count($greeting);
    echo "<br>";

    echo strpos($greeting, "Yangon");
    echo "<br>";

    echo strtoupper($city);
    echo "<br>";

    echo strtolower($city);
    echo "<br>";

    echo str_replace("Yangon", "Mandalay", $greeting);
    echo "<br>";

    echo strrev($greeting);
    echo "<br>";

    echo trim($greeting);
    echo "<br>";

    $y = explode(" ", $greeting);
    print_r($y);
    echo "<br>";

    echo substr($greeting, 6, 6);
    echo "<br>";

    echo substr($greeting, -5, 6);
    echo "<br>";

    echo substr($greeting, 6, -1);
    echo "<br>";

    $x = "We are the so-called \"Vikings\" from the north.";
    echo $x;
?>