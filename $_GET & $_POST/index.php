<!DOCTYPE html>
<html>
<head>
    <title>GET Example</title>
</head>
<body>

    <h2>GET Form</h2>

    <form method="GET">
        <input type="text" name="username" placeholder="Enter your name">
        <button type="submit">Submit</button>
    </form>

    <?php
        echo "Your name is: " . $_GET['username'];
    ?>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>

    <h2>POST Form</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Enter your name">
        <button type="submit">Submit</button>
    </form>

    <?php
        echo "Your name is: " . $_POST['username'];
    ?>

</body>
</html>
