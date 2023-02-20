<?php

/* PHP 14) WAP to print a table of any number. */


// Define the number
$num = 10;

// Loop through the numbers from 1 to 10
for ($i = 1; $i <= 10; $i++) {
  // Multiply the number by the current loop variable
  $result = $num * $i;
  // Print the result in a table format
  echo $num . " x " . $i . " = " . $result . "<br>";
}

?>
