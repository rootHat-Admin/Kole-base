<?php 
require_once('db.php');

$login = $_POST['username'];
$password  = $_POST['password'];

if (empty($login) || empty($password)) {
    echo "Barlik derekterdi jazaniz";
    
        while($row = $result->fetch_assoc()) {
            echo "Kosh keldiniz, " . $row['login'] . "</br>";
            echo "<a href='index.php'> Artka oralu</a>";
        }
    } else {
        echo "Ondai paidalanushi jok!!!";
    }
}

?>