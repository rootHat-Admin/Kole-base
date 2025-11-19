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

// --------------------------------------------------------------------------

$login = $_POST["username"] ?? "";
$user_password = $_POST["password"] ?? "";
$repeatpassword = $_POST["repeatpassword"] ?? "";
$email = $_POST["email"] ?? "";
$message = "";

if (
    empty($login) ||
    empty($user_password) ||
    empty($repeatpassword) ||
    empty($email)
) {
    $message = "Барлық деректерді жазыңыз!";
} else {
    if ($user_password !== $repeatpassword) {
        $message = "Парольдер сәйкес келмейді!";
    } else {
        $stmt = $conn->prepare(
            "SELECT * FROM users WHERE login = ? OR email = ?",
        );
        $stmt->bind_param("ss", $login, $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $message = "Логин немесе электрондық пошта бар!";
        } else {
            $stmt = $conn->prepare(
                "INSERT INTO users (login, email, password) VALUES (?, ?, ?)",
            );
            $stmt->bind_param("sss", $login, $email, $user_password);

            if ($stmt->execute()) {
                $_SESSION['user_id'] = $conn->insert_id; 
                $_SESSION['username'] = $login;
                $_SESSION['email'] = $email;
                header("Location: index.php");
                exit();
            } else {
                $message = "Қате орын алды: " . $stmt->error;
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
    <title>Тіркелу</title>
    <link rel="stylesheet" href="form-style.css">
</head>
<body>
    <div class="registration-form">
        <h2 class="animated-title">Тіркелу</h2>
        <form action="register.php" method="POST">
            <label for="username">Логин:</label>
            <input type="text" name="username"  placeholder="Логин" value="<?= htmlspecialchars(
                $login,
            ) ?>" required>

            <label for="email">Poshta:</label>
            <input type="email" name="email" placeholder="example@gmail.com" value="<?= htmlspecialchars(
                $email,
            ) ?>" required>

            <label for="password">Құпия сөз:</label>
            <input type="password" name="password" placeholder="Құпия сөз" required>

            <label for="repeatpassword">Құпия сөзді растаңыз:</label>
            <input type="password" name="repeatpassword" placeholder="Құпия сөзді растаңыз" required>

            <button type="submit">Тіркелу</button>
        </form>
        <?php if ($message): ?>
            <div class="message"><?= $message ?></div>
        <?php endif; ?>

        <p>Егер тіркелген болсаңыз? <a href="login.php">Кіру</a></p>
    </div>
</body>
</html>
