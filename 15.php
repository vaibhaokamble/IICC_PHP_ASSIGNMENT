<?php

/* PHP 15) WAP to print prime numbers between 1 to 100. */


// Loop through the numbers from 1 to 100
for ($i = 2; $i <= 100; $i++) {
  // Assume the number is prime
  $isPrime = true;
  // Check if the number is divisible by any number from 2 to the square root of the number
  for ($j = 2; $j <= sqrt($i); $j++) {
    if ($i % $j == 0) {
      // If it is, the number is not prime
      $isPrime = false;
      break;
    }
  }
  // If the number is prime, print it to the screen
  if ($isPrime) {
    echo $i . " ";
  }
}

?>
