<?php

    $link = mysqli_connect("localhost", "root", "qwe123!@#", "chapter9");
    if (mysqli_connect_error()){
        die ("error connecting database");
    }

    // $query = "INSERT INTO users (email, password)
    //           VALUES ('shuwen@gmail.com', 'jswm0729')";
    $query = "UPDATE users
              SET password = 'lmy1987'
              WHERE email = 'limin9yuan@gmail.com'";

    mysqli_query($link, $query);

    $query = "SELECT *
              FROM users";

    $result = mysqli_query($link, $query);
    if ($result){

        $row = mysqli_fetch_array($result);
        echo "Your email is ".$row[1]." Your password is ".$row[2];;

    }






?>
