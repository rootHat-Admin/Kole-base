<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> "Тіркелу" формасы</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        .text-red {
            color: red;
        }

        .text-green {
            color: green;
        }
    </style>
</head>
<body>
     <form action="t.php" method="POST">
        <label for="full_name">Аты-жөні: </label> <br>
        <input type="text" name="full_name" placeholder="Аты-жөні"> <br><br>

        <label for="username">Логин: </label> <br>
        <input type="text" name="username" placeholder="Логин"> <br><br>

        <label for="email">Пошта: </label> <br>
        <input type="email" name="email" placeholder="Пошта"> <br><br>

        <label for="password">Құпиясөз: </label> <br>
        <input type="password" name="password" placeholder="Құпиясөз"> <br><br>

        <button type="submit">Тіркелу</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $full_name = trim($_POST['full_name']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Тексерушарттары
        if (empty($full_name) || empty($username) || empty($email) || empty($password)) { // барлық өріс толтырылған
            echo "Өрістерді толтырыңыз!";
        } else { 
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { // пошта форматы дұрыс
                echo '<br><hr> <h3 class="text-red">Жарамсыз email мекенжайы! </h3>'; // Қате болса - қызыл түспен хабарлама
            } elseif (strlen($password) < 6) { //  құпиясөз кемінде 6 таңбалы.
                echo '<br><hr> <h3 class="text-red">Құпия сөз кемінде 6 таңбадан тұруы керек.</h3>'; // Қате болса - қызыл түспен хабарлама
            } else {
                echo '<br><hr> <h3 class="text-green">Тіркелу сәтті өтті!</h3>'; // Дұрыс енгізілгенде - "Тіркелусәтті өтті!" 
                echo "<p>Аты-жөні: " . htmlspecialchars($full_name) . "</p>";
                echo "<p>Логин: " . htmlspecialchars($username) . "</p>";
                echo "<p>Пошта: " . htmlspecialchars($email) . "</p>";
                echo "<p>Құпиясөз: " . htmlspecialchars($password) . "</p>";
            }
        }

    }
    ?>

</body>
</html>

