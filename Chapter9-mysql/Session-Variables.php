<?php

    session_start();

    if ($_SESSION["email"]) {
        echo "You are login";
    }
    else {
        header("Location: Login-Form.php");
    }

?>
