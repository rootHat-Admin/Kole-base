<?php
class Person {
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function greet() {
        echo "Hello, $this->name";
    }
}
$p1 = new Person("Aslan");
$p1->greet();
?>