<?php

require_once "db.php";

$login = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";
$repeatpassword = $_POST["repeatpassword"] ?? "";
$email = $_POST["email"] ?? "";

if (
    empty($login) ||
    empty($password) ||
    empty($repeatpassword) ||
    empty($email)
) {
    echo "Барлық деректерді жазыңыз!";
} else {
    if ($password !== $repeatpassword) {
        echo "Парольдер сәйкес келмейді!";
    } else {
        echo "Тіркелу сәтті!";
    }
}
?>
