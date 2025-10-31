<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <!-- 1. Пайдаланушы тіркелу формасын жасаңыз (аты, email, жас, уақыты, күні). + -->
    <form action="task1.php" method="POST">
        <label for="name">Аты:</label><br>
        <input type="text" name="name" required placeholder="Атыңізді енгізіңіз"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required placeholder="Email адресіңізді енгізіңіз"><br><br>

        <label for="age">Жасыңыз:</label><br>
        <input type="number" name="age" required placeholder="Жасыңызды енгізіңіз"><br><br>

        <button type="submit">Тіркелу</button>
    </form>
    
    
    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $full_name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $userage = trim($_POST['age']);

        // Тексерушарттары
        if (empty($full_name) || empty($userage) || empty($email)) { // барлық өріс толтырылған
            echo '<br><hr> <h3 class="text-red">Өрістерді толтырыңыз! </h3>'; 
        } else { 
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { // пошта форматы дұрыс
                echo '<br><hr> <h3 class="text-red">Жарамсыз email мекенжайы! </h3>'; // Қате болса - қызыл түспен хабарлама
            } else {
                echo '<br><hr> <h3 class="text-green">Тіркелу сәтті өтті!</h3>'; // Дұрыс енгізілгенде - "Тіркелусәтті өтті!" 

                $name = htmlspecialchars($_POST["name"]);
                $email = htmlspecialchars($_POST["email"]);
                $age = htmlspecialchars($_POST["age"]);

                $date = date("Y-m-d H:i:s");

                $info = $name . " " . $date . "\n";

                $file = fopen("users.txt", "a"); // 2. PHP арқылы деректерді users.txt файлына сақтаңыз. +
                fwrite($file, $info);
                fclose($file);

                // 3. Енгізілген барлық қолданушыларды кесте түрінде экранға шығарыңыз.
            

            }
        }

    }

    ?>
</body>
</html>