<?php
class Car {
    public function features($features) {
        foreach ($features as $f) {
            echo $f . " ";
        }
    }
}

$car = new Car();
$car->features(["ABS", "Airbag", "GPS"]);
?>

<?php
