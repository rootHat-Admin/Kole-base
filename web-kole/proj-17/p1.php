<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
    <form action="p1.php" method="POST">
        <label for="name">Name: </label> <br>
        <input type="text" name="name"> <br><br>

        <label for="age">Age: </label> <br>
        <input type="number" name="age"> <br><br>

        <label for="email">Email: </label> <br>
        <input type="email" name="email"> <br><br>

        <button type="submit">Send</button>

    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = trim($_POST['name']);
        $age = trim($_POST['age']);
        $email = trim($_POST['email']);

        // Бос мәтіндерді тексеру
        if (empty($name) || empty($age) || empty($email)) {
            echo "Өрістерді толтырыңыз!";
        } else { // Age Тексеру
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Жарамсыз email мекенжайы!";
            } elseif (!is_numeric($age) || $age < 5) {
                echo "Жасыңыз 5-тен кем болмауы керек!";
            } else {
                echo "<h1> Malimet satti kad </h1>";
                echo "<p>Name: " . htmlspecialchars($name) . "</p>";
                echo "<p>Age: " . htmlspecialchars($age) . "</p>";
                echo "<p>Email: " . htmlspecialchars($age) . "</p>";
            }
        }

    }
    ?>

</body>
</html>