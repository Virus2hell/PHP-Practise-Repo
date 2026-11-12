<?php
    $foods = array("pizza", "burger", "taco");

    $foods[0] = "sushi"; // Change the first element to "sushi"
    array_push($foods, "pasta", "salad", "sandwich"); // Add "pasta", "salad", and "sandwich" to the end of the array
    array_pop($foods); // Remove the last element from the array
    array_shift($foods); // Remove the first element from the array

    $foods = array_reverse($foods); // Reverse the order of the array
    
    echo "The count of foods in the array is: " . count($foods) . "<br>";
    
    foreach($foods as $food) {
        echo $food . "<br>";
    }
?>