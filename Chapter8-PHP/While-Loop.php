<?php

  $i = 0;

  while ($i <= 10) {
    echo $i."<br>";
    $i++;
  }

  $myArray = array("Hi", "my", "name", "is", "Mingyuan");
  $i = 0;
  while ($i < sizeof($myArray)) {
    print_r ($myArray[$i]." ");
    $i++;
  }

?>
