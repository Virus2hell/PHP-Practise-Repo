<?php
    //isset() & empty() function in PHP

    $name = "John Doe";
    $name = null;
    $age = 30;
    $email = "";

    if(isset($name)) {
        echo "Name is set.<br>";
    }
    else {
        echo "Name is not set.<br>";
    }

    if(empty($email)) {
        echo "Email is empty.<br>";
    }


?>