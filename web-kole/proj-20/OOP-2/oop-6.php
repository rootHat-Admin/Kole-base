<?php
class Animal {
    public function eat() {
        echo "Eat<br>";
    }
}

class Dog extends Animal {
}
$dog = new Dog();
$dog->eat();
?>