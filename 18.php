<?php

/* PHP 18) WAP to print Armstrong number */


// Loop through the numbers from 1 to 100
for ($num = 1; $num <= 100; $num++) {
  // Convert the number to a string to get its length
  $num_str = (string)$num;
  $num_len = strlen($num_str);

  // Initialize the sum to 0
  $sum = 0;

  // Loop through the digits of the number
  for ($i = 0; $i < $num_len; $i++) {
    // Get the current digit and raise it to the power of the length
    $digit = (int)$num_str[$i];
    $digit_pow = pow($digit, $num_len);
    // Add the result to the sum
    $sum += $digit_pow;
  }

  // If the sum equals the original number, print it as an Armstrong number
  if ($sum == $num) {
    echo $num . " is an Armstrong number<br>";
  }
}

?>
