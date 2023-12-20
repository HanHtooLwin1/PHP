<?php 
    require_once 'Petrol_center.php';

    $petrolCenter = new Petrol_center();
    $petrolCenter->set_id(1);
    $petrolCenter->set_town("Mandalay");
    $petrolCenter->set_name("DANGO");
    $petrolCenter->set_doAvaliableNow("Yes");
    $petrolCenter->set_address("between 110st and 111st, Sein Pann road");
    $petrolCenter->set_rating("6");

    echo (
        "<ul><li>Center name : " . $petrolCenter->get_name() .
        "</li><li>Town : " . $petrolCenter->get_town() .
        "</li><li>Address : " . $petrolCenter->get_address() . 
        "</li><li>DoAvaliableNow : " . $petrolCenter->get_doAvaliableNow() .
        "</li><li>Rating : " . $petrolCenter->get_rating() . "</li></ul>" 
    );

    $petrol = new Petrol_center();
    $petrol->set_id(2);
    $petrol->set_town("Yangon");
    $petrol->set_name("KING");
    $petrol->set_doAvaliableNow("No");
    $petrol->set_address("Ba Yint Naung St,North Oakklapa");
    $petrol->set_rating("7");

    echo (
        "<ul><li>Center name : " . $petrol->get_name() .
        "</li><li>Town : " . $petrol->get_town() .
        "</li><li>Address : " . $petrol->get_address() . 
        "</li><li>DoAvaliableNow : " . $petrol->get_doAvaliableNow() .
        "</li><li>Rating : " . $petrol->get_rating() . "</li></ul>" 
    );
?>