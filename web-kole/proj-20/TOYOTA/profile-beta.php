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

if (empty($_SESSION['user_id'])) {
    header("Location: register.php");
    exit;
}

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT login, email, phone, address, avatar FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($login, $email, $phone, $address, $avatar);
$stmt->fetch();
$stmt->close();

$upload_message = "";
$add_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['avatar']) && $_FILES['avatar']['error'] === 0) {
        if (!is_dir("uploads")) mkdir("uploads", 0777, true);

        $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
        $filename = "avatar_" . $user_id . "." . $ext;
        $path = "uploads/" . $filename;

        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $path)) {
            $stmt = $conn->prepare("UPDATE users SET avatar=? WHERE id=?");
            $stmt->bind_param("si", $path, $user_id);
            $stmt->execute();
            $stmt->close();

            $avatar = $path;
            $upload_message = "Аватар успешно обновлён!";
        } else {
            $upload_message = "Ошибка: не удалось сохранить аватар.";
        }
    }

    if (isset($_POST['phone']) || isset($_POST['address'])) {
        $new_phone = $_POST['phone'] ?? $phone;
        $new_address = $_POST['address'] ?? $address;

        $stmt = $conn->prepare("UPDATE users SET phone=?, address=? WHERE id=?");
        $stmt->bind_param("ssi", $new_phone, $new_address, $user_id);
        $stmt->execute();
        $stmt->close();

        $phone = $new_phone;
        $address = $new_address;

        $add_message = "Данные успешно добавлены!";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="profile-style.css">
</head>
<body>

<div class="profile-container">

    <h2>Профиль</h2>

    <div class="avatar-section">
        <img src="<?= !empty($avatar) && file_exists($avatar) ? htmlspecialchars($avatar) : 'images/Toyota_logo.png' ?>" alt="Аватар">
    </div>

    <?php if (!empty($upload_message)) echo "<p class='message'>$upload_message</p>"; ?>
    <?php if (!empty($add_message)) echo "<p class='message'>$add_message</p>"; ?>

    <form method="POST" enctype="multipart/form-data">
        <label>Изменить аватар:</label>
        <input type="file" name="avatar" required>
        <button type="submit">Сменить аватар</button>
    </form>

    <p><strong>Имя:</strong> <?= htmlspecialchars($login) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>

    <p><strong>Телефон:</strong> <?= htmlspecialchars($phone) ?: "не указан" ?></p>
    <?php if (empty($phone)) : ?>
        <form method="POST" class="add-button" style="display:flex;">
            <input type="text" name="phone" placeholder="Введите телефон" required>
            <button type="submit">Добавить</button>
        </form>
    <?php endif; ?>

    <p><strong>Адрес:</strong> <?= htmlspecialchars($address) ?: "не указан" ?></p>
    <?php if (empty($address)) : ?>
        <form method="POST" class="add-button" style="display:flex;">
            <input type="text" name="address" placeholder="Введите адрес" required>
            <button type="submit">Добавить</button>
        </form>
    <?php endif; ?>

    <a href="logout.php" class="btn-logout">Выйти</a>

</div>

</body>
</html>
