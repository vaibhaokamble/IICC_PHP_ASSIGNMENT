<?php

/*

PHP 31) WAP to print following pattern
1
2 2 
3 3 3 
4 4 4 4 

*/


$a=4;

for($i=1; $i<=$a; $i++){
    for($j=1; $j<=$i; $j++){
        echo $i. " ";
    }
    echo "<br>";
}
?>