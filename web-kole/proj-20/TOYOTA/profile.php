<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ToyotaDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Қосылу сәтсіз болды: " . mysqli_connect_error());
}

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

    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === 0) {
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
            $upload_message = "Аватар сәтті жаңартылды!";
        } else {
            $upload_message = "Қате: аватарды сақтау мүмкін болмады.";
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

        $add_message = "Деректер сәтті қосылды!";
    }
}
?>

<!DOCTYPE html>
<html lang="kk">
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
        <label>Аватарды өзгерту:</label>
        <input type="file" name="avatar" required>
        <button type="submit">Аватарды жаңарту</button>
    </form>

    <p><strong>Аты-жөні:</strong> <?= htmlspecialchars($login) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>

    <p><strong>Телефон:</strong> <?= htmlspecialchars($phone) ?: "көрсетілмеген" ?></p>
    <?php if (empty($phone)) : ?>
        <form method="POST" class="add-button" style="display:flex;">
            <input type="text" name="phone" placeholder="Телефон енгізіңіз" required>
            <button type="submit">Қосу</button>
            
        </form>
    <?php endif; ?>

    <p><strong>Мекен-жайы:</strong> <?= htmlspecialchars($address) ?: "көрсетілмеген" ?></p>
    <?php if (empty($address)) : ?>
        <form method="POST" class="add-button" style="display:flex;">
            <input type="text" name="address" placeholder="Мекен-жай енгізіңіз" required>
            <button type="submit">Қосу</button>
        </form>
    <?php endif; ?>

    <a href="logout.php" class="btn-logout">Шығу</a>

    <a href="index.php" class="btn-back" style="display:inline-block; margin-top:15px; padding:10px 20px; background:#3498db; color:#fff; border-radius:25px; text-decoration:none; font-weight:bold;">Артқа қайту</a>

</div>

</body>
</html>
