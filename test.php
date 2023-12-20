<?php
/*$star = "";
for($i = 0; $i < 5; $i++) {
    for($m = 0; $m < 5; $m++) {
        $star .= "*";
    }
    $star .= "<br>";
}
echo $star;

$firstName = "Thomas";
$lastName = "James";

echo $firstName . " " . $lastName;*/

$animal = array("fish", "dog", "cat", "bird");
$animalLength = count($animal);
for($i = 0; $i < $animalLength; $i++) {
    echo $animal[$i] . "<br>";
}
?>