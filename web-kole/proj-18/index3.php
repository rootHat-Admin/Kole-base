<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php3</title>
</head>
<body>
    <?php
    $file = fopen("back.txt", "r");
    while (!feof($file)) {
        $line = fgets($file);
        echo "<p>" . htmlspecialchars($line) . "</p>";
    }
    fclose($file);
    ?>
</body>
</html>