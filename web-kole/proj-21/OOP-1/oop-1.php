<?php 

class Student {
    public $name;
    public $age;

    public function setData($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function showData() {
        echo "Аты: " . $this->name . "<br>" ;
        echo "Жасы: " . $this->age . "<br><br>" ;
    }
}

$st1 = new Student;
$st1->setData("Аслан", 18);
$st1->showData();

$st2 = new Student;
$st2->setData("Расул", 20);
$st2->showData();


?>