<?php
    //Cookie for the current session
    setcookie("session", "active", time() + (86400 * 2), "/"); // Set a cookie named "session" with the value "active" that expires in 2 days (172800 seconds) and is available across the entire website ("/").

?>
