<?php 
class Person {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$person1 = new Person("Aslan", 23);
echo "$person1->name, $person1->age"; 
?>