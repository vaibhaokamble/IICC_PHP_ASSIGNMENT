<?php

/*

PHP 29) WAP to print following pattern
1
2 3
4 5 6
7 8 9 10

*/

$a=1;

for ($i=1; $i<=4 ;$i++){
    for($j=1; $j<=$i; $j++){
        echo $a." ";
        $a++;
    }
    echo "<br>";
}

?>
