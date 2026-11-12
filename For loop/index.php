<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
</head>
<body>
    <form action="" method="post">
        <label>Enter a number:</label>
        <input type="number" name="number">
        <button type="submit" value="Submit">Submit</button>
    </form>
</body>
</html>

<?php

    $counter = $_POST['number'] ?? 0;

    for($i = 0; $i < $counter; $i++){
        echo "Hello World!<br>";
    }
?>