<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1</title>
    <style>

    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="">Username</label><br>
        <input type="text" name="username" placeholder="enter your username"> <br><br>
        
        <button type="submit">SEND</button>
    </form>

    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["username"] = htmlspecialchars($_POST["username"]);
    }

    if (isset($_SESSION["username"])) {
        echo "<h1>Welcome, " . $_SESSION["username"] . "</h1>";
    }
    ?>
    
</body>
</html>