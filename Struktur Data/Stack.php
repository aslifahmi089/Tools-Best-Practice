<?php
$stack = [];

array_push($stack, "A");
array_push($stack, "B");
array_push($stack, "C");

$terakhir = array_pop($stack);
 
echo $terakhir;
?>
