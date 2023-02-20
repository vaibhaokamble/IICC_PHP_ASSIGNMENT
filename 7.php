<?php
/* Que 7): WAP to count the number of occurrences of a character in a string 
“Inter Institutional Computer Centre”. */

$string = "Inter Institutional Computer Centre";
$char = 'i';
$count = 0;
for ($i = 0; $i < strlen($string); $i++) {
  if (strtolower($string[$i]) == strtolower($char)) {
    $count++;
  }
}

echo "The character ---> '" . $char . "' <---appears---> " . $count . "<--- times in the string.";
?>