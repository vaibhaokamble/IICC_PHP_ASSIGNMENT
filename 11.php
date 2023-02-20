<?php

/* PHP 11) WAP to print lowest among three numbers. */

// Define the 3 numbers to compare
$num1 = 10;
$num2 = 25;
$num3 = 15;

// Find the lowest number
$lowest = $num1;
if ($num2 < $lowest) {
  $lowest = $num2;
}
if ($num3 < $lowest) {
  $lowest = $num3;
}

// Print the result
echo "The lowest number is = " . $lowest;

?>
