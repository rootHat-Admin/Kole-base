<?php 
require_once('db.php');

$login = $_POST['username'];
$password  = $_POST['password'];

if (empty($login) || empty($password)) {
    echo "Barlik derekterdi jazaniz";
} else {
    $sql = "SELECT * FROM users WHERE login='$login' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Kosh keldiniz, " . $row['login'] . "</br>";
            echo "<a href='index.php'> Artka oralu</a>";
        }
    } else {
        echo "Ondai paidalanushi jok!!!";
    }
}

?>