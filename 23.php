<?php


/* PHP 23) WAP to print square of a number using anonymous function */


// Define an anonymous function to print the square of a number
$square = function($num) {
  echo "The square of " . $num . " is " . ($num * $num) . ".";
};

// Call the anonymous function to print the square of a number
$square(17);

?>
