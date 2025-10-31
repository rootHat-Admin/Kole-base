<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
</head>
<body>
    <form action="index2.php" method="POST">
        <label for="">Name</label><br>
        <input type="text" name="name" placeholder="enter your name"> <br><br>
        
        <button type="submit">SEND</button>
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $date = $name . "\n";

        $file = fopen("back.txt", "a");
        fwrite($file, $date);
        fclose($file);

        echo '<br><hr> <h3 class="text-green">Тіркелу сәтті өтті!</h3>';
    }
    ?>
    
</body>
</html>