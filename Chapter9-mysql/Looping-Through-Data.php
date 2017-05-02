<?php

    $link = mysqli_connect("localhost", "root", "qwe123!@#", "chapter9");
    if (mysqli_connect_error()){
        die ("error connecting database");
    }

    $name = "jack";

    $query = "SELECT *
              FROM users
              WHERE name = '".mysqli_real_escape_string($link, $name)."'";

    $result = mysqli_query($link, $query);

    if ($result){


        while ($row = mysqli_fetch_array($result)) {

            print_r($row);
        }
    }
?>
