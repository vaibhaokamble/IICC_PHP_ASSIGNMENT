<?php


/* PHP 28) WAP to print sum of 10 numbers using foreach statement */


// Define an array of 10 numbers
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Initialize the sum to 0
$sum = 0;

// Loop through the array using a foreach loop
foreach ($numbers as $number) {
    $sum += $number;
}

// Print the sum
echo "The sum of the numbers is: $sum";

?>
