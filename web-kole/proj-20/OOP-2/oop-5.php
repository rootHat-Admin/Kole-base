<?php
class Car {
    private $brend;
    public function setBrand($b) {
        $this->brend = $b;
    }
    public function getBrand() {
        return $this->brend;
    }
}
$car1 = new Car();
$car1->setBrand("BMW");
echo $car1->getBrand();
?>