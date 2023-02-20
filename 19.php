<?php

/* PHP 19) WAP to print palindrome number. */


// Loop through the numbers from 1 to 100
for ($num = 1; $num <= 100; $num++) {
  // Convert the number to a string and reverse it
  $num_str = (string)$num;
  $num_str_rev = strrev($num_str);

  // If the reversed string is equal to the original string, print the number as a palindrome
  if ($num_str_rev == $num_str) {
    echo $num . " is a palindrome number<br>";
  }
}

?>
