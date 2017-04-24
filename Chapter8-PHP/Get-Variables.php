<?php
function isPrime($num) {
  //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
  if($num == 1)
      return false;

  //2 is prime (the only even number that is prime)
  if($num == 2)
      return true;

  /**
   * if the number is divisible by two, then it's not prime and it's no longer
   * needed to check other even numbers
   */
  if($num % 2 == 0) {
      return false;
  }

  /**
   * Checks the odd numbers. If any of them is a factor, then it returns false.
   * The sqrt can be an aproximation, hence just for the sake of
   * security, one rounds it to the next highest integer value.
   */
  $ceil = ceil(sqrt($num));
  for($i = 3; $i <= $ceil; $i = $i + 2) {
      if($num % $i == 0)
          return false;
  }

  return true;
}
  if (isset($_GET["number"])) {
    if (is_numeric($_GET["number"]) && $_GET["number"] > 0 && $_GET["number"] == round($_GET["number"], 0)) {
      if (isPrime($_GET["number"])) {
        echo $_GET["number"]." is prime number";
      }
      else {
        echo $_GET["number"]." is not prime number";
      }
    }
    else {
      echo "Please enter a integer";
    }
  }

?>

<p>Please enter a number to check whether is prime number.</p>
<form>
  <input type="text" name="number">
  <input type="submit" value="Go!">
</form>
