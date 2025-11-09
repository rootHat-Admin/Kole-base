<?php 

require_once('db.php');

$login = $_POST['username'];
$password = $_POST['password'];
$repeatpassword = $_POST['repeatpassword'];
$email = $_POST['email'];

if (empty($login) || empty($password) || empty($repeatpassword) || empty($email)) {
    echo "Барлық деректерді жазыңыз!";
} else {
    if ($password !== $repeatpassword) {
        echo "Парольдер сәйкес келмейді!";
    } else {
        $sql = "INSERT INTO users (name, password, email) VALUES ('$login', '$password', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "Тіркелу сәтті өтті!";
            echo "<a href='index.php'>Артқа оралу</a>";
        } else {
            echo "Қате: " . $conn->error;
        }
    }
}
?>
