<?php
class Animal {
    public function sound() {
        echo "Бұл жаныур табыс шығарады<br>";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Ит үреді: Гав-гав!<br>";
    }
}

class Cat extends Animal {
    public function sound() {
        echo "Мысық миялайды: Мяу-мяу!<br>";
    }
}

$dog = new Dog();
$cat = new Cat(); 
$dog->sound();
$cat->sound();
?>
