<?php

/* 

PHP 30) WAP to print following pattern
*
* *
* * * 

*/

$x=3;

for ($i=0; $i<=3; $i++){
    for ($j=1; $j<= $i; $j++){
        echo "*";
    }
    echo "<br>";
}

?>