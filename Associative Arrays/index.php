<?php
    $capitals = array(
        "France" => "Paris",
        "Germany" => "Berlin",
        "Italy" => "Rome",
        "Spain" => "Madrid",
        "United Kingdom" => "London"
    );

    foreach($capitals as $country => $city) {
        echo "The capital of $country is $city.<br>";
    }
?>