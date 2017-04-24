<?php
  if ($_POST) {
    $isKnow = false;
    $nameBank = array("Mingyuan", "Mingli", "Guangyi", "Hongwei", "Khaleesi");
    foreach ($nameBank as $key => $value) {
      if ($_POST["name"] == $value) {
        $isKnow = true;
      }
    }
    if ($isKnow) {
      echo "Hi ".$_POST["name"]."!";
    }
    else {
      echo "I don't know you";
    }
  }





?>

<form method="post">
  <p>What's your name</p>
  <input type="text" name="name">
  <input type="submit" value="Submit!">
</form>
