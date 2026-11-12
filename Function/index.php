<?php
    function happy_birthday($name, $age) {
        echo "Happy Birthday, $name! You are now $age years old. <br>";
    }

    happy_birthday("Alice", 30);
    happy_birthday("Bob", 25);

    function hypotenuse($a, $b) {
        return sqrt($a * $a + $b * $b);
    }

    echo "The hypotenuse of a right triangle with sides 3 and 4 is: " . hypotenuse(3, 4) . "<br>";
?>

