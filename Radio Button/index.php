<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php
    if(isset($_POST['confirm'])) {

        if(isset($_POST['gender'])) {
            $gender = $_POST['gender'];
            echo "You selected: " . $gender;
        }
        else {
            echo "Please select a gender.";
        }
    }
?>
