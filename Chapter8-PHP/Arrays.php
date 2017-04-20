<?php

$myArray = array("Hi", "My", "name", "is", "Mingyuan");
$myArray[] = "What";
unset($myArray[0]);

print_r($myArray);

echo "<p>$myArray[1]</p>";

$antherArray[0] = "Apple";
$antherArray[1] = "Banana";
$antherArray[2] = "Pinapple";
$antherArray[3] = "Peach";
$antherArray[9] = "Fruit";
$antherArray["Most like"] = "Ice cream";
print_r($antherArray);
echo "<br><br>";
$thirdArray = $arrayName = array(
    "France" => "Franch",
    "China" => "Chinese",
    "USA" => "English" );
print_r($thirdArray);

echo "<br><br>";

$length = sizeof($antherArray);
echo "The length of antherArray is $length";
 ?>
