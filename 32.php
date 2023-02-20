<?php

/*
PHP 32) WAP to print following pattern
* * * *
* * *
* *
*
*/


$num=1;
for($i=4; $i>=$num; $i-- ){
    for ($j=0; $j<$i; $j++){
        echo '*';
    }
    echo "<br>";
}

?>