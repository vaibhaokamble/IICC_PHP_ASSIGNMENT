<?php
/* WAP to print sum of first ānā numbers. */
$n = 7;
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
  $sum += $i;
}
echo "The sum of the first " . $n . " natural numbers is: " . $sum;

?>