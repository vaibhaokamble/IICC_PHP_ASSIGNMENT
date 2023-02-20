<?php
/* PHP 2) WAP create an associate array key (1-10) and value will be its cube. */   
$cubes = array();
for ($i = 1; $i <= 10; $i++) {
  $cubes[$i] = pow($i, 3);
}
print_r($cubes);

?>