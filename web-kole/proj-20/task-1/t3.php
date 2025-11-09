<?php 
class Calculator {
    public function kosu($a, $b) {
        return $a + $b;
    }

    public function alu($a, $b) {
        return $a - $b;
    }

    public function kobeytu($a, $b) {
        return $a * $b;
    }

    public function bolu($a, $b) {
        if ($b == 0) {
            return "0-ге бөлуге болмайды!";
        } 
        return $a / $b;
    }
}

$cal = new Calculator();

echo "Қосылу: " . $cal->kosu(12, 6) . "<br>";   
echo "Алу: " . $cal->alu(12, 6) . "<br>";     
echo "Көбейту: " . $cal->kobeytu(12, 6) . "<br>";   
echo "Бөлу: " . $cal->bolu(12, 6) . "<br><br>";     

echo "0-ге бөлу: " . $cal->bolu(12, 0) . "<br>";
?>