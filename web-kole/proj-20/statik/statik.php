<?php 

class Counter {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }
}

$a = new Counter;
$b = new Counter;

echo Counter::$count;
?>