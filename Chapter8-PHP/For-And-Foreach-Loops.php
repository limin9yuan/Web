<?php

for ($i=0; $i < 5; $i++) {
    echo "<p>Hi</p>";
}

for ($i=0; $i < 10; $i++) {
    echo $i."<br>";
}
echo "<br><br>";
for ($i=2; $i <= 30; $i = $i+2) {
    echo $i."<br>";
}

$myArray = array("Hi", "My", "name", "is", "Mingyuan");
for ($i = 0; $i < sizeof($myArray); $i++) {
    echo $myArray[$i]."<br>";
}

$antherArray[0] = "Apple";
$antherArray[1] = "Banana";
$antherArray[2] = "Pinapple";
$antherArray[3] = "Peach";
$antherArray[9] = "Fruit";
$antherArray["Most like"] = "Ice cream";
foreach ($antherArray as $key => $value) {
    $antherArray[$key] = $value." is good ";
    echo "Array item ".$key." is ".$value."<br>";
}
foreach ($antherArray as $key => $value) {
    echo "Array item ".$key." is ".$value."<br>";
}
?>
