<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select file</title>
    <link rel="stylesheet" href="style.css">
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <p>File tandaniz:</p>
        <input type="file" name="photo" >
        <input type="submit" value="SEND">
    </form>

    <?php 
    $path = "uploads/" . $_FILES['photo']['name'];

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
        echo "<h2 style='color: green;'>" . htmlspecialchars($_FILES['photo']['name']) . " сәтті жүктелді!</h2>";
        echo "<br><img src='" . $path . "' width='500px' 'height='500px'>";
    } else {
        echo "Файл жүктелмеді!";
    }


    ?>

    <?php 
    $allowed = ["jpg", "png", "gif"];
    $filetype = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));

    if (!in_array($filetype, $allowed)) {
        echo "Bunday formatta dile juktelmedi!";
    }
    ?>


</body>
</html>