<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name input</title>
</head>
<body>
    <form action="task2.php" method="post">
        <label for="name">Аты:</label> <br>
        <input type="text" name="name" placeholder="Аты"><br><br>

        <label for="name">Жасы:</label><br>
        <input type="text" name="age" placeholder="Жасы"><br><br>
    
        <input type="submit" value="Жеберу">

    </form>
    
    <h1>Сәлем, <?php echo ($_POST['name']); ?></h1>
</body>
</html>
