<?php

/* PHP 34) WAP to print sum of first 10 numbers using foreach statemen */

$nums = range(1, 11);
$sum=0;
foreach($nums as $n){
    $sum= $sum + $n;
}
echo "The sum of the first $n number by using foreach statement is $sum";

?>