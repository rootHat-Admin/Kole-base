<?php

class Car {
    // Қасиеттер
    public $brand;  
    public $year;  
    public $price;  

    // Әдіс
    public function showInfo() {
        echo "Марка: " . $this->brand . "<br>";
        echo "Год: " . $this->year . "<br>";
        echo "Цена: " . $this->price . " тг.<br>";
    }
}

// бъект
$car1 = new Car();
$car1->brand = "Toyota";
$car1->year = 2020;
$car1->price = 61500000;

$car2 = new Car();
$car2->brand = "BMW";
$car2->year = 2022;
$car2->price = 73000000;

$car1->showInfo();
$car2->showInfo();

?>
