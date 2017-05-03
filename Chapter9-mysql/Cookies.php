<?php

    setcookie("customerId", "1234", time() + 60 * 60 * 24 );
    echo $_COOKIE["customerId"];


?>
