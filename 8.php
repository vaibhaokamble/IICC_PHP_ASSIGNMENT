<?php
/* PHP 8) WAP to reverse the four digit number */
$num = 1711;

$rev = 0;
$rev += ($num % 10) * 1000;
$rev += (int)($num / 10) % 10 * 100;
$rev += (int)($num / 100) % 10 * 10;
$rev += (int)($num / 1000);

// Print the result
echo "The reverse of " . $num . " is " . $rev;

?>