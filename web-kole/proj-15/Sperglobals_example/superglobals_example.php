<?php

// 1️⃣ $_GET example
$get_name = $_GET["name"] ?? "Guest";
$get_age = $_GET["age"] ?? "Unknown";

// 2️⃣ $_POST example
$post_username = $_POST["username"] ?? "";

// 3️⃣ $_SERVER example
$current_script = $_POST["PHP_SELF"];
$host_name = $_SERVER["HTTP_HOST"];
$request_method = $_SERVER["REQUEST_METHOD"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Superglobals Example</title>
</head>
<body>
    <h1>PHP Superglobals Example</h1>

    <h2>GET Example</h2>
    <p> Name from GET: <?php echo htmlspecialchars($get_name); ?> </p>
    <p> Age from GET: <?php echo htmlspecialchars($get_age); ?> </p>

    <h2>GET Example</h2>
    <form method="post" action="">
        <label>Username: <input type="text" name="username"></label>
        <button type="submit">Submit</button>
    </form>
    <p>Submitted Username: <?php echo htmlspecialchars($post_username); ?></p>

    <h2> SERVER Example</h2>
    <p>Current Script: <?php echo $current_script; ?></p>
    <p>Host: <?php echo $host_name; ?>
    <p>Request Method: <?php echo $request_method; ?></p>
</body>
</html>
