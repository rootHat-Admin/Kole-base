<?php

$x = true;
$y = false;

var_dump($x && $y); // false (AND)
var_dump($x || $y); // true  (OR)
var_dump(!$x); // false (NOT)
var_dump($x xor $y); // true  (XOR: only one true)

?>
