<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select file</title>
    <link rel="stylesheet" href="style.css">
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <h1>File tandaniz:</h1>
        <input type="file" name="photo" >
        <input type="submit" value="SEND">
    </form>

    <?php 
    $path = "uploads/" . $_FILES['photo']['name'];
    

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
        echo "<h2 style='color: green;'>" . $_FILES['photo']['name'] . " Сәтті жүктелді! </h2>";
        echo "<br><img src='" . $path . "' width='300px' 'height='300px'>";
    } else {
        echo "<h2 style='color: green;'>" . $_FILES['photo']['name'] . " Сәтті жүктелді! </h2>";

        echo "<h2 style='color: red;' > Файл жүктелмеді! </h2>";
    }
    ?>

    <?php 
    $allowed = ["jpg", "png", "gif"];
    $filetype = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));

    if (!in_array($filetype, $allowed)) {
        echo "<h2 style='color: red;' > Bunday formatta dile juktelmedi! </h2>";
    }
    ?>
</body>
</html>м