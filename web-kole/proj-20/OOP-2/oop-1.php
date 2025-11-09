<?php 
class Car {
    public $brand;
    public function __construct($b) {
        $this->brand = $b;
    }
}
$car1 = new Car("Marce");
echo $car1->brand;
        
?>