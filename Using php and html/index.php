
<?php
    function hypotenuse($a, $b) {
        return sqrt($a * $a + $b * $b);
    }

    $result = "";

    if (isset($_POST['calculate'])) {
        $a = $_POST['side_a'];
        $b = $_POST['side_b'];

        $result = hypotenuse($a, $b);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hypotenuse Calculator</title>
</head>
<body>

    <h2>Hypotenuse Calculator</h2>

    <form method="POST">

        <label>Enter Side A:</label>
        <input type="number" name="side_a" required>

        <br><br>

        <label>Enter Side B:</label>
        <input type="number" name="side_b" required>

        <br><br>

        <button type="submit" name="calculate">Calculate</button>

    </form>

    <h3>
        <?php
            if ($result !== "") {
                echo "Hypotenuse is: " . $result;
            }
        ?>
    </h3>

</body>
</html>
