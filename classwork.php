<?php 
    /* $output = 1;
    $largestNum = 2;
    for($i = 1; $i < $largestNum + 1; $i++) {
        echo $output . "<br>";
        $output .= $i + 1;
    } 

    $alphabet = array("a", "b", "c", "d", "e", "f", "g");
    for($i = count($alphabet) - 1; $i >= 0; $i--) {
        echo $alphabet[$i] . "<br>";
    }
    print_r(array_pop($alphabet));
    print_r($alphabet); */

    // $colors = array("White", "Black", "Blue");
    // $arrLength = count($colors);

    // function checkColor($color) {
    //     global $colors;
    //     global $arrLength;

    //     for($i = 0; $i < $arrLength; $i++) {
    //         if(strtolower($colors[$i]) ==  strtolower($color)) {
    //             echo "$colors[$i] is avaliable!";
    //             break;
    //         }
    //         else if($i == $arrLength-1){
    //             echo "$color is not avaliable!";    
    //         } 
    //     }

    //     /* if($i == $arrLength){
    //         echo "$color is not avaliable!";    
    //     }  */ 
    //     echo "Search done!";
    // }

    $colorList = array("white", "black", "blue");
    
    function isColorExist($colorKeyword) {
        global $colorList;
        $colorCount = count($colorList);
        $colorKeyword = strtolower($colorKeyword);

        for($i = 0; $i < $colorCount; $i++) {
            if(strtolower($colorList[$i]) == $colorKeyword) {
                return true;
            } 
        }

        return false;
    }

    function searchColor($colorName) {
        global $colorList;
        //echo $colorName . (isColorExist($colorName) ? " is found." : " is not found.");
        if(in_array(strtolower($colorName), $colorList)) {
            echo "is found.";
        }
        else {
            echo "is not found.";
        }
    }

    searchColor("Black");