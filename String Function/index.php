<?php
    //String Functions
    $text = "Hello, World!";
    echo strlen($text); // Outputs: 13
    echo strtoupper($text); // Outputs: HELLO, WORLD!
    echo strtolower($text); // Outputs: hello, world!
    echo substr($text, 0, 5); // Outputs: Hello
    echo str_replace("World", "PHP", $text); // Outputs: Hello, PHP!    
    echo strpos($text, "World"); // Outputs: 7
    echo trim("   Hello, World!   "); // Outputs: Hello, World!
    echo str_repeat("Hello! ", 3); // Outputs: Hello! Hello! Hello!
    echo strrev($text); // Outputs: !dlroW ,olleH
    echo str_shuffle($text); // Outputs: Randomly shuffled string of "Hello, World!"
    echo str_word_count($text); // Outputs: 2
    echo str_pad("Hello", 10, "-"); // Outputs: Hello-----
    echo strcasecmp("hello", "HELLO"); // Outputs: 0 (case-insensitive comparison)
    //explode and implode
    $csv = "apple,banana,cherry";
    $fruits = explode(",", $csv); // Converts CSV string to array
    print_r($fruits); // Outputs: Array ( [0] => apple [1] => banana [2] => cherry )
    $newCsv = implode(";", $fruits); // Converts array back to CSV string
    echo $newCsv; // Outputs: apple;banana;cherry
?>
