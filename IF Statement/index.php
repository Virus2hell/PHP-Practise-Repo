<?php
    $age = 15;

    if($age >= 18) {
        echo "You are an adult.";
    }
    elseif($age >= 13) {
        echo "You are a teenager.";
    }
    else {
        echo "You are a minor.";
    }

    echo "<br>";

    $adult = true;

    if($adult) {
        echo "You are an adult.";
    }
    else {
        echo "You are not an adult.";
    }
?>