<?php

$a = 5;
$b = 10;

var_dump($a == $b); // false (equal)
var_dump($a != $b); // true  (not equal)
var_dump($a > $b); // false
var_dump($a < $b); // true
var_dump($a >= 5); // true
var_dump($b <= 10); // true
var_dump($a === "5"); // false (identical: value + type)
var_dump($a !== "5"); // true  (not identical)

?>
