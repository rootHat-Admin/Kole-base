<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: register.php");
    exit();
}

$car = $_GET['car'] ?? '';

$message = $_GET['message'] ?? '';
?>

<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформление заказа</title>
    <link rel="stylesheet" href="form-style.css">
</head>
<body>
    <div class="registration-form">
        <h2 class="animated-title">Автокөлікке тапсырыс беру</h2>
        <form action="index.php" method="POST">
            <label for="username">Аты-жөніңіз:</label>
            <input type="text" name="username" value="<?= htmlspecialchars($_SESSION['username']) ?>" required>

            <label for="car">Марка автомобиля:</label>
            <input type="text" name="car" value="<?= htmlspecialchars($car) ?>" readonly required>

            <label for="comment">Комментарий:</label>
            <textarea name="comment" placeholder="Қосымша ақпарат..." rows="4"></textarea>

            <label for="address">Мекенжай:</label>
            <input type="text" name="address" placeholder="Мекенжайыңызды енгізіңіз" required>

            <label for="phone">Телефон нөмірі:</label>
            <input type="text" name="phone" placeholder="Телефон нөмірі" required>

            <button type="submit">Жіберу</button>
        </form>

        <?php if ($message): ?>
            <div class="message"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
