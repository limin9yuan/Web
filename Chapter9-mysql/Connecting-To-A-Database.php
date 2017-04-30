<?php

    mysqli_connect("localhost", "root", "qwe123!@#");
    if (mysqli_connect_error()){
        echo "error connecting database";
    }
    else {
        echo "Connect success!";
    }





?>
