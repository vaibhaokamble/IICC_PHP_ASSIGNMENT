<?php

/*  PHP 10) WAP to print greatest among 3 numbers. */


// Define the 3 numbers to compare
$num1 = 10;
$num2 = 25;
$num3 = 15;

// Find the greatest number
$greatest = $num1;
if ($num2 > $greatest) {
  $greatest = $num2;
}
if ($num3 > $greatest) {
  $greatest = $num3;
}

// Print the result
echo "The greatest number is = " . $greatest;

?>
