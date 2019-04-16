<?php
include 'include.php';

$audiRS1 = new Audi('Audi', 'RS1', 100000, 5, 1, 1, 0);
$moto = new Yamaha('Kawasaki', 'Z900', 8000, 1,1);

var_dump($audiRS1);
var_dump($moto);

?>