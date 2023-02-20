<?php


/* PHP 26) WAP to use static variable in function */


function incrementCounter() {
    static $counter = 0;
    $counter++;
    return $counter;
}

echo incrementCounter(); // Output: 1
echo incrementCounter(); // Output: 2
echo incrementCounter(); // Output: 3

?>
