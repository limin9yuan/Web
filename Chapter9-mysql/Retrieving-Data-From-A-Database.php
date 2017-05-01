<?php

    $link = mysqli_connect("localhost", "root", "qwe123!@#", "chapter9");
    if (mysqli_connect_error()){
        die ("error connecting database");
    }

    $query = "SELECT *
              FROM users";

    $result = mysqli_query($link, $query);
    if ($result){

        $row = mysqli_fetch_array($result);
        echo "Your email is ".$row[1]." Your password is ".$row[2];;

    }






?>
