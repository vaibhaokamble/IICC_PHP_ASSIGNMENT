<?php
/* PHP 12) WAP to accept four digit number and print its sum of digits. */

// Define the four-digit number
$num = 1234;

// Compute the sum of the digits
$sum = 0;
$sum += $num % 10;
$sum += (int)($num / 10) % 10;
$sum += (int)($num / 100) % 10;
$sum += (int)($num / 1000);

// Print the result
echo "The sum of the digits of " . $num . " is " . $sum;

?>
