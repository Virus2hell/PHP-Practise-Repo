<?php
    $age = 20;
    $male = true;

    if($age >= 18 && $male) {
        echo "You are an adult male.";
    } else if ($age >= 18 && !$male) {
        echo "You are an adult female.";
    } else {
        echo "You are not an adult.";
    }

    echo "<br>";
    
    if($age >= 18 || $male) {
        echo "You are either an adult or male.";
    } else {
        echo "You are neither an adult nor male.";
    }
?>