<?php

$name = "Mingyuan";

echo "<p>$name</p>";

echo "<p>My name is $name</p>";

$string1 = "<p>This is first part";
$string2 = "of a sentence</p>";
echo $string1." ".$string2;

$myNumber = 45;
$calculate = $myNumber * 31 / 97 + 4;
echo "This result is ".$calculate;

$flag = true;
echo "<p>This statement is true? ".$flag."</p>";
echo "<p>If false return nothing</p>";

$variableName = "name";
echo $$variableName;
?>
