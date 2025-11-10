<?php
class Animal {
    public function sound() {
        echo "Sound<br>";
    }
}
class Dog extends Animal {
    public function sound()
    {
        echo "Gaw<br>";
    }
}
class Cat extends Animal {
    public function sound()
    {
        echo "May<br>";
    }
}

$animal = [new Dog(), new Cat()];
foreach($animal as $a) { 
    $a->sound(); 
}
?>