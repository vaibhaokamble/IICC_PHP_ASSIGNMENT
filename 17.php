<?php

/* PHP 17) WAP to print factorial of a number */


// Define the number
$num = 7;

// Initialize the factorial to 1
$factorial = 1;

// Loop through the numbers from 1 to the number
for ($i = 1; $i <= $num; $i++) {
  // Multiply the factorial by the current loop variable
  $factorial *= $i;
}

// Print the factorial to the screen
echo "The factorial of " . $num . " is " . $factorial;

?>
