<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter function in PHP</title>
</head>
<body>
    <form method="post">
        <label for="name">Input Name:</label>
        <input type="text" name="name" placeholder="Enter something">
        <br>
        <label for="age">Input Age:</label>
        <input type="text" name="age" placeholder="Enter age">
        <br>
        <label for="email">Input Email:</label>
        <input type="text" name="email" placeholder="Enter email">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        $ageValid = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
        $emailValid = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Email: " . $email . "<br>";

        if ($ageValid) {
            echo "Valid age input.<br>";
        } else {
            echo "Invalid age input.<br>";
        }

        if ($emailValid === false) {
            echo "Invalid email input.<br>";
        } else {
            echo "Valid email input.<br>";
        }
    }
?>
