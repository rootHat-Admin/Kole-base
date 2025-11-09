<?php 
class Person {
    public $name;
    public function __construct($name) 
    {
        $this->name = $name;
    }
    public function __destruct()
    {
        echo "$this->name close<br>";
    }
} 
$p1 = new Person("Aslan");
?>