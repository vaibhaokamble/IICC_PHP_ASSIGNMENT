<?php


/* PHP 20) WAP to print Fibonacci series */


// Function to generate and print the Fibonacci series
function fibonacci($n) {
  // Initialize the first two numbers of the series
  $num1 = 0;
  $num2 = 1;

  // Print the first two numbers of the series
  echo $num1 . " " . $num2 . " ";

  // Generate and print the remaining numbers of the series
  for ($i = 2; $i < $n; $i++) {
    $num3 = $num1 + $num2;
    echo $num3 . " ";
    $num1 = $num2;
    $num2 = $num3;
  }
}

// Call the function to print the first 10 terms of the Fibonacci series
fibonacci(10);

?>
