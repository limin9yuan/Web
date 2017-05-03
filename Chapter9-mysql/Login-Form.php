<?php
    session_start();
    $link = mysqli_connect("localhost", "root", "qwe123!@#", "chapter9");
    if (mysqli_connect_error()){
        die ("error connecting database");
    }

    if (array_key_exists("email", $_POST) || array_key_exists("password", $_POST)) {
        if ($_POST["email"] == "") {
            echo "Require email address<br>";
        }
        if ($_POST["password"] == "") {
            echo "Require password<br>";
        }
        $query = "SELECT id
                  FROM users
                  WHERE email = '".mysqli_real_escape_string($link, $_POST["email"])."'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) > 0){
            echo "Email already exist<br>";
        }
        else {
            $query = "INSERT INTO users (email, password)
                      VALUES ('".mysqli_real_escape_string($link, $_POST["email"])."',
                              '".mysqli_real_escape_string($link, $_POST["password"])."')";
            if (mysqli_query($link, $query)){
                $_SESSION["email"] = $_POST["email"];
                header("Location: Session-Variables.php");
            }
            else {
                echo "Fail. Try again<br>";
            }
        }




    }
?>
<form method="post">
    <input type="text" name="email" placeholder="Email Addrsss">
    <input type="text" name="password" placeholder="Password">
    <input type="submit" value="Sign up">

</form>
