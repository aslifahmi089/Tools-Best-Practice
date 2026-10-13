<?php
$queue = [];

array_push($queue, "pelanggan 1");
array_push($queue, "pelanggan 2");
array_push($queue, "pelanggan 3");

$berikutnya = array_shift($queue);

echo $berikutnya;
?>
