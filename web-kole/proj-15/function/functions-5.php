<?php

function sumAll(...$numbers)
{
    return array_sum($numbers);
}

echo sumAll(1, 2, 3, 4); // 10

?>
