<?php

class Book {
    // Қасиеттер
    public $title;
    public $author;
    public $price;

    // Әдіс
    public function showInfo() {
        echo "Кітаптың атауы: " . $this->title . "<br>";
        echo "Автор: " . $this->author . "<br>";
        echo "Бағасы: " . $this->price . " тг<br>";
    }
}

$book = new Book();
$book->title = "Түркістан";
$book->author = "Магжан Жумабаев";
$book->price = 1500;

$book->showInfo();

?>
