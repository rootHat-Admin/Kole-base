<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ToyotaDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$login = $_POST["username"] ?? "";
$user_password = $_POST["password"] ?? "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($login) || empty($user_password)) {
        $message = "Барлық деректерді жазыңыз!";
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE login = ?");
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            $message = "Логин немесе құпия сөз дұрыс емес!";
        } else {
            $user = $result->fetch_assoc();
            
            if ($user["password"] === $user_password) {
              
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["username"] = $user["login"];
                header("Location: index.php");
                exit();
            } else {
                $message = "Логин немесе құпия сөз дұрыс емес!";
            }
        }

        $stmt->close();
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кіру</title>
    <link rel="stylesheet" href="form-style.css">
</head>
<body>
    <div class="registration-form">
        <h2 class="animated-title">Кіру</h2>
        <form action="login.php" method="POST">
            <label class="text-color" for="username">Логин:</label>
            <input type="text" name="username" placeholder="Логин" required>

            <label class="text-color" for="password">Құпия сөз:</label>
            <input type="password" name="password" placeholder="Құпия сөз" required>

            <button type="submit">Кіру</button>
        </form>
        <?php if ($message): ?>
            <div class="message"><?= $message ?></div>
        <?php endif; ?>
        <p>Тіркелмедіңіз бе? <a href="register.php">Тіркелу</a></p>
    </div>
</body>
</html>
