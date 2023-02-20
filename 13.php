<?php

/* PHP 13) WAP to count and display vowels of a given string “Inter 
Institutional Computer Centre”. */


// Define the string
$str = "Inter Institutional Computer Centre";

// Initialize a counter for vowels
$vowelCount = 0;

// Define an array of vowels
$vowels = array('a', 'e', 'i', 'o', 'u');

// Loop through the characters in the string
for ($i = 0; $i < strlen($str); $i++) {
  // Convert the character to lowercase
  $char = strtolower($str[$i]);
  
  // Check if the character is a vowel
  if (in_array($char, $vowels)) {
    // If it is, increment the vowel count
    $vowelCount++;
    // and display the vowel
    echo $char . " ";
  }
}

// Print the vowel count
echo "The string has " . $vowelCount . " vowels.";

?>
