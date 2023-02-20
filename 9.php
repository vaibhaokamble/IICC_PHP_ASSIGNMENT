
<?php
/* PHP 9) WAP to swipe the two numbers without using third number. */

// Define the two numbers to swap
$a = 17;
$b = 10;

// Swap the numbers using addition and subtraction
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

// Print the result
echo "a = " . $a . "<br>";
echo "b = " . $b;

?>
