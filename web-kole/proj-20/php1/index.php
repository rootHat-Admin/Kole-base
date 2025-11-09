<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="POST">
        <label class="title" for="username">Tirkelu</label>

        <label for="username">Aty:</label><br>
        <input type="text" name="username"> <br><br>

        <label for="email">Poshta:</label><br>
        <input type="email" name="email" placeholder="example@gmail.com"> <br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password"> <br><br>

        <label for="repeatpassword">Repeat password</label><br>
        <input type="password" name="repeatpassword"> <br><br>

        <button type="submit">Tirkelu</button>
    </form>


    <hr>

    <form action="login.php" method="POST">
        <label for="username">Aty:</label><br>
        <input type="text" name="username"><br><br>

        <label for="email">Poshta:</label><br>
        <input type="email" placeholder="example@gmail.com"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Kiur</button>
    </form>
    
</body>
</html>