<?php 
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function sub($a, $b) {
        return $a - $b;
    }

    public function mul($a, $b) {
        return $a * $b;
    }

    public function div($a, $b) {
        if ($b == 0) {
            return "Кате 0 ге болуге болмайды!";
        } 
        return $a / $b;
    }
}

$cal = new Calculator();
$cal->add(12, 6);
?>